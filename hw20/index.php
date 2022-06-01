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
        $contact1 = new ContactList("12345678", 'marko@rakic');
        $contact2 = new ContactList("45678912", 'danilo.strahinovic');
        $contact3 = new ContactList("98765432", 'vanja@vdjukic');

        $kontaktLista = new ContactList("98765432", 'vanja@vdjukic');


        //echo Contact::contains('danilo');
        echo $contact2->contains('danilo');
        echo "<br>";

        $kontaktLista->addContact($contact1);
        $kontaktLista->addContact($contact2);
        $kontaktLista->addContact($contact3);

        
       // var_dump($kontaktLista);
       // echo "<br>";
       // var_dump($kontaktLista->contacts);

       $objekatCustomer1 = new CustomerContact('Marko', 'Rakic');
       $objekatCustomer2 = new CustomerContact('Raka', 'Markovic');

       $objekatBiznis1 = new BusinessContact("Krusevac", "BizSoft");
       $objekatBiznis2 = new BusinessContact("Nis", "TechTube");

       $kontaktLista->addContact($objekatCustomer1);
       $kontaktLista->addContact($objekatCustomer2);
       $kontaktLista->addContact($objekatBiznis1);
       $kontaktLista->addContact($objekatBiznis2);

       $kontaktLista->listAllContacts();
    ?>
</body>
</html>