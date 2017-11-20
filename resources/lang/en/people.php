<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 kids|{1,1} 1 kid|{2,*} :count kids',
    'people_list_last_updated' => 'Last consulted:',
    'people_list_number_reminders' => '{0} 0 reminders|{1,1} 1 reminder|{2, *} :count reminders',
    'people_list_blank_title' => 'You don\'t have anyone in your account yet',
    'people_list_blank_cta' => 'Add someone',
    'people_list_sort' => 'Sort',
    'people_list_stats' => ':count contacts',
    'people_list_firstnameAZ' => 'Sort by first name A → Z',
    'people_list_firstnameZA' => 'Sort by first name Z → A',
    'people_list_lastnameAZ' => 'Sort by last name A → Z',
    'people_list_lastnameZA' => 'Sort by last name Z → A',
    'people_list_filter_tag' => 'Showing all the contacts tagged with <span class="pretty-tag">:name</span>',
    'people_list_clear_filter' => 'Clear filter',
    'people_list_contacts_per_tags' => '{0} 0 contact|{1,1} 1 contact|{2,*} :count contacts',
    'people_search' => 'Search your contacts...',
    'people_search_no_results' => 'No relevant contacts found :(',
    'people_list_account_usage' => 'Your account usage: :current/:limit contacts',
    'people_list_account_upgrade_title' => 'Upgrade your account to unlock it to its full potential.',
    'people_list_account_upgrade_cta' => 'Upgrade now',

    // people add
    'people_add_title' => 'Add a new person',
    'people_add_firstname' => 'First name',
    'people_add_middlename' => 'Middle name (Optional)',
    'people_add_lastname' => 'Last name (Optional)',
    'people_add_cta' => 'Add',
    'people_save_and_add_another_cta' => 'Submit and add someone else',
    'people_add_success' => ':name has been successfully created',
    'people_add_gender' => 'Gender',
    'people_delete_success' => 'The contact has been deleted',
    'people_delete_message' => 'If you need to delete this contact,',
    'people_delete_click_here' => 'click here',
    'people_delete_confirmation' => 'Are you sure you want to delete this contact? Deletion is permanent.',
    'people_add_birthday_reminder' => 'Wish happy birthday to :name',
    'people_add_import' => 'Do you want to <a href="/settings/import">import your contacts</a>?',
    'people_edit_email_error' => 'There is already a contact in your account with this email address. Please choose another one.',

    // show
    'section_personal_information' => 'Personal information',
    'section_personal_activities' => 'Activities',
    'section_personal_reminders' => 'Reminders',
    'section_personal_tasks' => 'Tasks',
    'section_personal_gifts' => 'Gifts',

    //
    'link_to_list' => 'Contacts',

    // Header
    'edit_contact_information' => 'Edit contact information',
    'call_button' => 'Log a call',

    // Calls
    'modal_call_title' => 'Log a call',
    'modal_call_comment' => 'What did you talk about? (optional)',
    'modal_call_date' => 'The phone call happened earlier today.',
    'modal_call_change' => 'Change',
    'modal_call_exact_date' => 'The phone call happened on',
    'calls_add_success' => 'The phone call has been saved.',
    'call_delete_confirmation' => 'Are you sure you want to delete this call?',
    'call_delete_success' => 'The call has been deleted successfully',
    'call_title' => 'Phone calls',
    'call_empty_comment' => 'No details',
    'call_blank_title' => 'Keep track of the phone calls you\'ve done with :name',
    'call_blank_desc' => 'You called :name',

    // age - birthday
    'birthdate_not_set' => 'Birthdate is not set',
    'age_approximate_in_years' => 'around :age years old',
    'age_exact_in_years' => ':age years old',
    'age_exact_birthdate' => 'born :date',

    // Last called
    'last_called' => 'Last called: :date',
    'last_called_empty' => 'Last called: unknown',
    'last_activity_date' => 'Last activity together: :date',
    'last_activity_date_empty' => 'Last activity together: unknown',

    // additional information
    'information_edit_success' => 'The profile has been updated successfully',
    'information_edit_title' => 'Edit :name\'s personal information',
    'information_edit_avatar' => 'Photo/avatar of the contact',
    'information_edit_max_size' => 'Max :size Mb.',
    'information_edit_firstname' => 'First name',
    'information_edit_lastname' => 'Last name (Optional)',
    'information_edit_facebook' => 'Facebook profile (optional)',
    'information_edit_twitter' => 'Twitter profile (optional)',
    'information_edit_linkedin' => 'LinkedIn profile (optional)',
    'information_edit_street' => 'Street (optional)',
    'information_edit_province' => 'Province (optional)',
    'information_edit_postalcode' => 'Postal code (optional)',
    'information_edit_city' => 'City (optional)',
    'information_edit_country' => 'Country (optional)',
    'information_edit_email' => 'Email address (optional)',
    'information_edit_phone' => 'Phone number (optional)',
    'information_edit_probably' => 'This person is probably',
    'information_edit_probably_yo' => 'years old',
    'information_edit_exact' => 'I know the exact birthdate of this person, which is',
    'information_edit_help' => 'If you indicate an exact birthdate for this person, we will create a new reminder for you - so you\'ll be notified every year when it\'s time to celebrate this person\'s birthdate.',
    'information_no_address_defined' => 'No address defined',
    'information_no_email_defined' => 'No email address defined',
    'information_no_phone_defined' => 'No phone number defined',
    'information_no_facebook_defined' => 'No Facebook defined',
    'information_no_twitter_defined' => 'No Twitter defined',
    'information_no_linkedin_defined' => 'No LinkedIn defined',
    'information_no_work_defined' => 'No work information defined',
    'information_work_at' => 'at :company',
    'work_add_cta' => 'Update work information',
    'work_edit_success' => 'Work information have been updated with success',
    'work_edit_title' => 'Update :name\'s job information',
    'work_edit_job' => 'Job title (optional)',
    'work_edit_company' => 'Company (optional)',

    // food preferencies
    'food_preferencies_add_success' => 'Food preferences have been saved',
    'food_preferencies_edit_description' => 'Perhaps :firstname or someone in the :family\'s family has an allergy. Or doesn\'t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferencies_edit_description_no_last_name' => 'Perhaps :firstname has an allergy. Or doesn\'t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferencies_edit_title' => 'Indicate food preferences',
    'food_preferencies_edit_cta' => 'Save food preferences',
    'food_preferencies_title' => 'Food preferences',
    'food_preferencies_cta' => 'Add food preferences',

    // reminders
    'reminders_blank_title' => 'Is there something you want to be reminded of about :name?',
    'reminders_blank_add_activity' => 'Add a reminder',
    'reminders_add_title' => 'What would you like to be reminded of about :name?',
    'reminders_add_description' => 'Please remind me to...',
    'reminders_add_next_time' => 'When is the next time you would like to be reminded about this?',
    'reminders_add_once' => 'Remind me about this just once',
    'reminders_add_recurrent' => 'Remind me about this every',
    'reminders_add_starting_from' => 'starting from the date specified above',
    'reminders_add_cta' => 'Add reminder',
    'reminders_add_error_custom_text' => 'You need to indicate a text for this reminder',
    'reminders_create_success' => 'The reminder has been added successfully',
    'reminders_delete_success' => 'The reminder has been deleted successfully',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'every week|every :number weeks',
    'reminder_frequency_month' => 'every month|every :number months',
    'reminder_frequency_year' => 'every year|every :number year',
    'reminder_frequency_one_time' => 'on :date',
    'reminders_delete_confirmation' => 'Are you sure you want to delete this reminder?',
    'reminders_delete_cta' => 'Delete',
    'reminders_next_expected_date' => 'on',
    'reminders_cta' => 'Add a reminder',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdates can not be deleted. If you want to change those dates, edit the birthdate of the contacts.',
    'reminders_one_time' => 'One time',
    'reminders_type_week' => 'week',
    'reminders_type_month' => 'month',
    'reminders_type_year' => 'year',
    'reminders_birthday' => 'Birthday of :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // significant other
    'significant_other_sidebar_title' => 'Significant other',
    'significant_other_cta' => 'Add significant other',
    'significant_other_add_title' => 'Who is :name\'s significant other?',
    'significant_other_add_firstname' => 'First name',
    'significant_other_add_unknown' => 'I do not know this person\'s age',
    'significant_other_add_probably' => 'This person is probably',
    'significant_other_add_probably_yo' => 'years old',
    'significant_other_add_exact' => 'I know the exact birthdate of this person, which is',
    'significant_other_add_help' => 'If you indicate an exact birthdate for this person, we will create a new reminder for you - so you\'ll be notified every year when it\'s time to celebrate this person\'s birthdate.',
    'significant_other_add_cta' => 'Add significant other',
    'significant_other_edit_cta' => 'Edit significant other',
    'significant_other_delete_confirmation' => 'Are you sure you want to delete this significant other? Deletion is permanent',
    'significant_other_unlink_confirmation' => 'Are you sure you want to delete this relationship? This significant other will not be deleted - only the relationship between the two.',
    'significant_other_add_success' => 'The significant other has been added successfully',
    'significant_other_edit_success' => 'The significant other has been updated successfully',
    'significant_other_delete_success' => 'The significant other has been deleted successfully',
    'significant_other_add_birthday_reminder' => 'Wish happy birthday to :name, :contact_firstname\'s significant other',
    'significant_other_add_person' => 'Add a new person',
    'significant_other_link_existing_contact' => 'Link existing contact',
    'significant_other_add_no_existing_contact' => 'You don\'t have any contacts who can be :name\'s significant others at the moment.',
    'significant_other_add_existing_contact' => 'Select an existing contact as the significant other for :name',
    'contact_add_also_create_contact' => 'Create a Contact entry for this person.',
    'contact_add_add_description' => 'This will let you treat this significant other like any other contact.',

    // kids
    'kids_sidebar_title' => 'Children',
    'kids_sidebar_cta' => 'Add another child',
    'kids_blank_cta' => 'Add a child',
    'kids_add_title' => 'Add a child',
    'kids_add_boy' => 'Boy',
    'kids_add_girl' => 'Girl',
    'kids_add_gender' => 'Gender',
    'kids_add_firstname' => 'First name',
    'kids_add_firstname_help' => 'We assume the last name is :name',
    'kids_add_lastname' => 'Last name (optional)',
    'kids_add_also_create' => 'Also create a Contact entry for this person.',
    'kids_add_also_desc' => 'This will let you treat this kid like any other contact.',
    'kids_add_no_existing_contact' => 'You don\'t have any contacts who can be :name\'s kid at the moment.',
    'kids_add_existing_contact' => 'Select an existing contact as the kid for :name',
    'kids_add_probably' => 'This child is probably',
    'kids_add_probably_yo' => 'years old',
    'kids_add_exact' => 'I know the exact birthdate of this child, which is',
    'kids_add_help' => 'If you indicate an exact birthdate for this child, we will create a new reminder for you - so you\'ll be notified every year when it\'s time to celebrate this child\'s birthdate',
    'kids_add_cta' => 'Add child',
    'kids_edit_title' => 'Edit information about :name',
    'kids_delete_confirmation' => 'Are you sure you want to delete this child? Deletion is permanent',
    'kids_add_success' => 'The child has been added with success',
    'kids_update_success' => 'The child has been updated successfully',
    'kids_delete_success' => 'The child has been deleted successfully',
    'kids_add_birthday_reminder' => 'Wish happy birthday to :name, :contact_firstname\'s child',
    'kids_unlink_confirmation' => 'Are you sure you want to delete this relationship? This kid will not be deleted - only the relationship between the two.',

    // tasks
    'tasks_desc' => 'Keep tracks of things you need to do for :name',
    'tasks_blank_title' => 'It looks like you don\'t have any tasks about :name yet',
    'tasks_blank_add_activity' => 'Add task',
    'tasks_add_title_page' => 'Add a new task for :name',
    'tasks_add_title' => 'What is the task you want to be reminded of?',
    'tasks_add_optional_comment' => 'Comment (optional)',
    'tasks_add_cta' => 'Add task',
    'tasks_add_success' => 'The task has been added successfully',
    'tasks_delete' => 'Delete',
    'tasks_reactivate' => 'Reactivate',
    'tasks_mark_complete' => 'Mark as complete',
    'tasks_add_task' => 'Add a task',
    'tasks_added_on' => 'added on :date',
    'tasks_delete_confirmation' => 'Are you sure you want to delete this task?',
    'tasks_delete_success' => 'The task has been deleted successfully',
    'tasks_complete_success' => 'The task has changed status successfully',

    // activities
    'activity_title' => 'Activities',
    'activity_type_group_simple_activities' => 'Simple activities',
    'activity_type_group_sport' => 'Sport',
    'activity_type_group_food' => 'Food',
    'activity_type_group_cultural_activities' => 'Cultural activities',
    'activity_type_just_hung_out' => 'just hung out',
    'activity_type_watched_movie_at_home' => 'watched a movie at home',
    'activity_type_talked_at_home' => 'just talked at home',
    'activity_type_did_sport_activities_together' => 'did sport together',
    'activity_type_ate_at_his_place' => 'ate at his place',
    'activity_type_ate_at_her_place' => 'ate at her place',
    'activity_type_went_bar' => 'went to a bar',
    'activity_type_ate_at_home' => 'ate at home',
    'activity_type_picknicked' => 'picknicked',
    'activity_type_went_theater' => 'went to the theater',
    'activity_type_went_concert' => 'went to a concert',
    'activity_type_went_play' => 'went to a play',
    'activity_type_went_museum' => 'went to the museum',
    'activity_type_ate_restaurant' => 'ate at a restaurant',
    'activities_add_activity' => 'Add activity',
    'activities_more_details' => 'More details',
    'activities_hide_details' => 'Hide details',
    'activities_delete_confirmation' => 'Are you sure you want to delete this activity?',
    'activities_item_information' => ':Activity. Happened on :date',
    'activities_add_title' => 'What did you do with :name?',
    'activities_summary' => 'Describe what you did',
    'activities_add_pick_activity' => '(Optional) Would you like to categorize this activity? You don\'t have to, but it will give you statistics later on',
    'activities_add_date_occured' => 'Date this activity occured',
    'activities_add_optional_comment' => 'Optional comment',
    'activities_add_cta' => 'Record activity',
    'activities_blank_title' => 'Keep track of what you\'ve done with :name in the past, and what you\'ve talked about',
    'activities_blank_add_activity' => 'Add an activity',
    'activities_add_success' => 'The activity has been added successfully',
    'activities_update_success' => 'The activity has been updated successfully',
    'activities_delete_success' => 'The activity has been deleted successfully',
    'activities_who_was_involved' => 'Who was involved?',

    // notes
    'notes_create_success' => 'The note has been created successfully',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_title' => 'Add a note about :name',
    'notes_add_cta' => 'Add note',
    'notes_edit_title' => 'Edit note about :name',
    'notes_edit_cta' => 'Save note',
    'notes_written_on' => 'Written on :date',
    'notes_add_one_more' => 'Add another note',
    'notes_title' => 'Notes',
    'notes_blank_link' => 'Add a note',
    'notes_blank_name' => 'about :name',
    'notes_delete_confirmation' => 'Are you sure you want to delete this note? Deletion is permanent',

    // gifts
    'gifts_blank_title' => 'Manage your gifts ideas and the ones you\'ve offered to :name',
    'gifts_blank_add_gift' => 'Add a gift',
    'gifts_add_success' => 'The gift has been added successfully',
    'gifts_delete_success' => 'The gift has been deleted successfully',
    'gifts_delete_confirmation' => 'Are you sure you want to delete this gift?',
    'gifts_add_gift' => 'Add a gift',
    'gifts_link' => 'Link',
    'gifts_added_on' => 'Added on :date',
    'gifts_delete_cta' => 'Delete',
    'gifts_offered' => 'offered',
    'gifts_add_title' => 'Gift management for :name',
    'gifts_add_gift_idea' => 'Gift idea',
    'gifts_add_gift_already_offered' => 'Gift already offered',
    'gifts_add_gift_title' => 'What is this gift?',
    'gifts_add_link' => 'Link to the web page (optional)',
    'gifts_add_value' => 'Value (optional)',
    'gifts_add_comment' => 'Comment (optional)',
    'gifts_add_someone' => 'This gift is for someone in :name\'s family in particular',
    'gifts_add_cta' => 'Add',
    'gifts_gift_idea' => 'Gift idea',
    'gifts_gift_already_offered' => 'Gifts already offered',
    'gifts_table_date_added' => 'Date added',
    'gifts_table_description' => 'Description',
    'gifts_table_actions' => 'Actions',

    // debts
    'debt_delete_confirmation' => 'Are you sure you want to delete this debt?',
    'debt_delete_success' => 'The debt has been deleted successfully',
    'debt_add_success' => 'The debt has been added successfully',
    'debt_title' => 'Debts',
    'debt_add_cta' => 'Add debt',
    'debt_you_owe' => 'You owe :amount',
    'debt_they_owe' => ':name owes you :amount',
    'debt_add_title' => 'Debt management',
    'debt_add_you_owe' => 'You owe :name',
    'debt_add_they_owe' => ':name owes you',
    'debt_add_amount' => 'the sum of',
    'debt_add_reason' => 'for the following reason (optional)',
    'debt_add_add_cta' => 'Add debt',
    'debt_edit_update_cta' => 'Update debt',
    'debt_edit_success' => 'The debt has been updated successfully',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you',
    'debt_status' => 'Debt Paid',
    'inprogress' => 'In progress',
    'paid' => 'Paid',

    // tags
    'tag_edit' => 'Edit tag',

    // Introductions
    'introductions_sidebar_title' => 'How you met',
    'introductions_blank_cta' => 'Indicate how you met :name',
    'introductions_title_edit' => 'How did you meet :name?',
    'introductions_additional_info' => 'Explain how and where you met',
    'introductions_edit_met_through' => 'Has someone introduced you to this person?',
    'introductions_no_met_through' => 'No one',
    'introductions_first_met_date' => 'Date you met',
    'introductions_no_first_met_date' => 'I don\'t know the date we met',
    'introductions_first_met_date_known' => 'This is the date we met',
    'introductions_add_reminder' => 'Add a reminder to celebrate this encounter on the anniversary this event happened',
    'introductions_update_success' => 'You\'ve successfully updated the information about how you met this person',
    'introductions_met_through' => 'Met through <a href="/people/:id">:name</a>',
    'introductions_met_date' => 'Met on :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this person as deceased',
    'deceased_know_date' => 'I know the date this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Deceased',
    'deceased_label_with_date' => 'Deceased on :date',
];
