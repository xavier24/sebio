<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<form method="post">
    <input type="text" class="input-text" placeholder="email"/>
    <input type="text" class="input-text" placeholder="mot de passe"/>
    <input type="submit" class="submit" value="connexion"/>
</form>
<section id="connexion" class="block">
    <h1 class="entete">Connexion à votre compte</h1>
    <form action="http://lettrage-bekaert.eu/xavier/cUrl/member/login" accept-charset="utf-8" method="post">
        <label for="email">Adresse email</label><input type="text" name="email" value="" id="email"  />
        <label for="mdp">Mot de passe</label><input type="password" name="mdp" value="" id="mdp"  />
        <input type="submit" name="check" class="connex" value="Connexion"  />
    </form>   
</section>
<section id="inscription" class="block">
    <h1 class="entete">Créer mon compte</h1>
    <form action="http://lettrage-bekaert.eu/xavier/cUrl/inscription/inscrire" accept-charset="utf-8" method="post">
        <label for="email">Entrez votre adresse email</label><input type="text" name="email" value="" id="email"  />
        <label for="pseudo">Entrez votre nom ou pseudo</label><input type="text" name="pseudo" value="" id="pseudo"  />
        <label for="mdp">Entrez votre mot de passe</label><input type="password" name="mdp" value="" id="pass"  />
        <label for="mdp2">Entrez à nouveau votre mot de passe</label><input type="password" name="mdp2" value="" id="pass2"  />
        <input type="submit" name="check" class="connex" value="Je m&#39;inscris"  />
    </form>
</section>    
<?php include('footer.php') ?>