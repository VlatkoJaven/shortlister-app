@extends('layouts.app')

@section('content')
    <div class="container">
     <h1 class="text-center">Implementation of Multiple Email Support for Different Communication Types</h1>
     <ul>
    <li><strong>Database Changes</strong>
        <ul>
            <li>A new table (<strong>company_emails</strong>) is needed to store multiple email addresses for each company.</li>
            <li>The table will have the following columns: <strong>id</strong> (Primary Key), <strong>company_id</strong> (Foreign Key referencing the company profile table), <strong>email</strong> (Stores the email address), and <strong>type</strong> (Specifies the type of email).</li>
        </ul>
    </li>
    <li><strong>Relationship</strong>
        <ul>
            <li>Define a <strong>one-to-many</strong> relationship between the <strong>companies</strong> table and the <strong>company_emails</strong> table, where each company can have multiple email addresses.</li>
        </ul>
    </li>
    <li><strong>Backend</strong>
        <ul>
            <li>If using Laravel, implement the necessary backend logic.</li>
            <li>Create a <strong>Model</strong> to interact with the <strong>company_emails</strong> table.</li>
            <li>Create a <strong>Controller</strong> to handle adding, updating, and removing email addresses for each company.</li>
            <li>Update the <strong>Company Profile Controller</strong> to support multiple email addresses per company.</li>
            <li>Implement <strong>email validation</strong> to ensure only valid email addresses are stored.</li>
            <li>Update the logic to <strong>fetch and use the appropriate email address</strong> based on the communication type.</li>
        </ul>
    </li>
    <li><strong>Frontend</strong>
        <ul>
            <li>Update the <strong>Company Profile UI</strong> to allow users to:</li>
            <li><strong>Add</strong> multiple email addresses.</li>
            <li><strong>Specify</strong> the type of each email using a <strong>dropdown</strong> or <strong>checkboxes</strong>.</li>
            <li><strong>Edit</strong> or <strong>remove</strong> email addresses.</li>
            <li><strong>Display</strong> each email address along with its corresponding type.</li>
        </ul>
    </li>
    <li><strong>Communication Logic</strong>
        <ul>
            <li>Update the system’s <strong>email-sending logic</strong> to:</li>
            <li><strong>Select</strong> the appropriate email address based on the communication type.</li>
            <li><strong>Ensure</strong> email templates are correctly routed to the designated email address.</li>
            <li>If the system has <strong>user roles</strong> (admin, marketing manager), ensure that only <strong>authorized users</strong> can manage email addresses.</li>
        </ul>
    </li>
    <li><strong>Testing</strong>
        <ul>
            <li>Write <strong>unit tests</strong> for creating, updating, and deleting email addresses.</li>
            <li><strong>Verify</strong> that communications are sent to the correct email address based on its type.</li>
        </ul>
    </li>
</ul>

    </div>

@endsection