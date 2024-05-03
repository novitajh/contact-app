<?php
include 'models/Contacts.php';

class DashboardController {
    public function index() {
        $contacts = new Contacts();
        $contactList = $contacts->selectContacts();
        include 'views/dashboard.php';
    }
}
?>
