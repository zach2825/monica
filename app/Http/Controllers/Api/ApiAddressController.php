<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Address;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\Address\Address as AddressResource;

class ApiAddressController extends ApiController
{
    /**
     * Get the detail of a given address.
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $address = Address::where('account_id', auth()->user()->account_id)
                ->where('id', $id)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        return new AddressResource($address);
    }

    /**
     * Store the address.
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validates basic fields to create the entry
        $validator = Validator::make($request->all(), [
            'name' => 'max:255|required',
            'street' => 'max:255|nullable',
            'city' => 'max:255|nullable',
            'province' => 'max:255|nullable',
            'postal_code' => 'max:255|nullable',
            'country_id' => 'integer|nullable',
            'contact_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->setErrorCode(32)
                        ->respondWithError($validator->errors()->all());
        }

        try {
            Contact::where('account_id', auth()->user()->account_id)
                ->where('id', $request->input('contact_id'))
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        try {
            $address = Address::create(
              $request->all()
              + [
                'account_id' => auth()->user()->account->id,
              ]
            );
        } catch (QueryException $e) {
            return $this->respondNotTheRightParameters();
        }

        return new AddressResource($address);
    }

    /**
     * Update the address.
     * @param  Request $request
     * @param  int $addressId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $addressId)
    {
        try {
            $address = Address::where('account_id', auth()->user()->account_id)
                ->where('id', $addressId)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        // Validates basic fields to create the entry
        $validator = Validator::make($request->all(), [
            'name' => 'max:255|required',
            'street' => 'max:255|nullable',
            'city' => 'max:255|nullable',
            'province' => 'max:255|nullable',
            'postal_code' => 'max:255|nullable',
            'country_id' => 'integer|nullable',
            'contact_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->setErrorCode(32)
                        ->respondWithError($validator->errors()->all());
        }

        try {
            Contact::where('account_id', auth()->user()->account_id)
                ->where('id', $request->input('contact_id'))
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        try {
            $address->update($request->all());
        } catch (QueryException $e) {
            return $this->respondNotTheRightParameters();
        }

        return new AddressResource($address);
    }

    /**
     * Delete a address.
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $addressId)
    {
        try {
            $address = Address::where('account_id', auth()->user()->account_id)
                ->where('id', $addressId)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        $address->delete();

        return $this->respondObjectDeleted($address->id);
    }

    /**
     * Get the list of addresses for the given contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function addresses(Request $request, $contactId)
    {
        try {
            $contact = Contact::where('account_id', auth()->user()->account_id)
                ->where('id', $contactId)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        $addresses = $contact->addresses()
                ->paginate($this->getLimitPerPage());

        return AddressResource::collection($addresses);
    }
}
