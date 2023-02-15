<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    > -->
    <link rel="stylesheet" href="style.css" />
</head>

<body class="d-flex flex-column min-vh-100">
<header>
    <h1>Sayyora <span>Pardaeva</span> </h1>
    <h2>Développeuse <em>web</em></h2>
     </header>
     <section>
        <h3>MES EXPÉ<span>RIENCES</h3>
        <ul>
            <li>Développeuse web chez OpenClassrooms</li>
            <i>Décembre 2021 - Décembre 2022 | en ligne</i>
            <p> J'ai appris transformer une maquette en site; dynamiser avec les animations; optimiser un site <span>SEO</span>; construire un site e-commerce en <span>JavaScript</span>; construire une <span>API sécurisée</span> pour une application et créer une application <span>React;</span> </p>
            <li>Conséllère séjours à distance chez "KeepCall"</li>
            <i>Décembre 2021 - Août 2022 | Saint-Genis-Laval |CDD</i>
            <p>Mon rôle était conseiller et vendre des séjours Belambra. J'ai réussi à réaliser un CA qui représentait 1/4 du CA de l'entreprise. </p>
            <li>Assistante back-office chez "Les Maisons du Voyage"</li>
            <i>Septembre 2019 - Janvier 2020 | Paris | CDD</i>
            <p>En tant qu'assistante commerciale je m'occupais des e-visas (l'Oman, l'Inde, la Russie), je rédigeais des programmes, facturais les clients et préparais les dossiers du voyage</p>
            <li>Forfaitiste technico-commerciale BtoB chez "Akilanga"</li>
            <i>Avril 2019 - Septembre 2019 | Paris | Stage</i>
            <p>J'ai réussi de créer les relations client dans le monde d'entreprises touristiques et mon rôle était de vendre des séjours pour la zone l'Afrique australe et orientale.</p>
            
         </ul>
         </section>
         <section>
         <h3><span>MES FORM</span>ATIONS</h3>
         <ul>
            <li>OpenClassrooms</li>
            <p>Diplôme niveau 5(bac+2) en web développement </p>
            <li>Université Lumières Lyon 2</li>
            <p>Master 2,tourisme, valorisation touristique et récréative </p>
            <li>Université des Langues de Samarkande</li>
            <p>Master 2, linguiste, professeur du français et d'anglais pour les étudiants étrangères </p>
         </ul>
</section>
    <div class="container">

    <?php  ?>
        <h3>On en <span>discute? 👩‍💻 </h3>
        
        <form>
            <div class="contact">
            <label for="name" class="form-label">Prénom et nom</label>
                <input type="text" placeholder="Prénom et nom" required class="form-label"></input>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre mail" aria-describedby="email-help">
                <!-- <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div> -->
            <!-- </div> -->
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>

    <?php  ?>
</body>
</html>
