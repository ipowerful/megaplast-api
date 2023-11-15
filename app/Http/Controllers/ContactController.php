<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Http\Controllers\BaseController as BaseController;

class ContactController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return $this->sendResponse($contacts, 'Contacts retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        return $this->sendResponse($contact, 'Контакт успешно добавлен', 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return $this->sendResponse($contact, 'Контакт успешно изменен', 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return $this->sendResponse([], 'Контакт успешно удален');
    }
}
