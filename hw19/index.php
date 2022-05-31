<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework 19</title>
    <?php include_once 'class.php'; ?>
</head>
<body>
    <?php
        $contact1 = new Contact("12345678", 'marko@rakic');
        $contact2 = new Contact("45678912", 'danilo.strahinovic');
        $contact3 = new Contact("98765432", 'vanja@vdjukic');

        $kontaktLista = new ContactList("98765432", 'vanja@vdjukic');


        //echo Contact::contains('danilo');
        echo $contact2->contains('danilo');
        echo "<br>";

        $kontaktLista->addContact($contact1);
        $kontaktLista->addContact($contact2);
        $kontaktLista->addContact($contact3);

        $kontaktLista->listAllContacts();
       // var_dump($kontaktLista);
       // echo "<br>";
       // var_dump($kontaktLista->contacts);
    ?>
</body>
</html>