@extends('layouts.app')

@section('content')
<div class="container mt-5">


<div class="text-center mb-4">
    <h2>ER Diagram</h2>
    <img src="{{ asset('images/newER-img.png') }}" alt="ER Diagram" class="img-fluid">
</div>


<h3 class="text-center mb-4">Explanation</h3>
<table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Table</th>
                <th>Related Table</th>
                <th>Foreign Key</th>
                <th>Relationship Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Company</td>
                <td>User</td>
                <td>company_id</td>
                <td>One-to-Many</td>
                <td>A company can have multiple users.</td>
            </tr>
            <tr>
                <td>Company</td>
                <td>Company_Conversation</td>
                <td>company_id</td>
                <td>One-to-Many</td>
                <td>A company can be involved in multiple conversations.</td>
            </tr>
            <tr>
                <td>Conversation</td>
                <td>Company_Conversation</td>
                <td>conversation_id</td>
                <td>One-to-Many</td>
                <td>A conversation can involve multiple companies.</td>
            </tr>
            <tr>
                <td>Conversation</td>
                <td>Conversation_Participants</td>
                <td>conversation_id</td>
                <td>Many-to-Many</td>
                <td>Multiple users can participate in a conversation.</td>
            </tr>
            <tr>
                <td>Conversation</td>
                <td>Message</td>
                <td>conversation_id</td>
                <td>One-to-Many</td>
                <td>A conversation can have multiple messages.</td>
            </tr>
            <tr>
                <td>User</td>
                <td>Conversation</td>
                <td>started_by_user_id</td>
                <td>One-to-Many</td>
                <td>A user can start multiple conversations.</td>
            </tr>
            <tr>
                <td>User</td>
                <td>Unread_Message</td>
                <td>user_id</td>
                <td>One-to-Many</td>
                <td>A user can have multiple unread messages.</td>
            </tr>
            <tr>
                <td>User</td>
                <td>Message</td>
                <td>sender_user_id</td>
                <td>One-to-Many</td>
                <td>A user can send multiple messages.</td>
            </tr>
            <tr>
                <td>User</td>
                <td>Conversation_Participants</td>
                <td>user_id</td>
                <td>Many-to-Many</td>
                <td>A user can be in multiple conversations.</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>File</td>
                <td>message_id</td>
                <td>One-to-Many</td>
                <td>A message can have multiple files.</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>Unread_Message</td>
                <td>message_id</td>
                <td>One-to-Many</td>
                <td>A message can be unread by multiple users.</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection