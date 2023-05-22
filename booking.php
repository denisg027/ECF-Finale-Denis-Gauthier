<?php
session_start();
include 'Assets/includes/head.html';
include './Assets/includes/navbar.php';


?>


<!-- Réservation -->
<main id="main">
    <div class="book-container">
        <form name="booking" action="" method="POST">
            <h3 class="form-title">Réserver</h3>
            
                <div class="form-group-left">
                    <label for="name">Prénom</label>
                    <input type="text" id="firstName" name="name" required autocomplete="name">
                </div>
                <div class="form-group-right">
                    <label for="name">Nom</label>
                    <input type="text" id="lastName" name="name" required autocomplete="name">
                </div>
                <div class="form-group-left">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required autocomplete="email">
                </div>
                <div class="form-group-right">
                    <label for="guestNumber">Nombre de Convives</label>
                    <select class="form-select" name="convives" id="convives" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
                </div>
                <div class="form-group-left">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="res_date" required>
                </div>
                <div class="form-group-right">
                    <label for="time">Déjeuner</label>
                    <select class="form-select"name="time" id="time">
                <option value="--:--">--:--</option>
                <option value="11:00">11:00</option>
                <option value="11:15">11:15</option>
                <option value="11:30">11:30</option>
                <option value="11:45">11:45</option>
                <option value="12:00">12:00</option>
                <option value="12:15">12:15</option>
                <option value="12:30">12:30</option>
                <option value="12:45">12:45</option>
                <option value="13:00">13:00</option>
            </select>
                </div>
                <div class="form-group-right">
                    <label for="time">Diner</label>
                    <select class="form-select" name="time" id="time">
                <option value="--:--">--:--</option>
                <option value="18:00">18:00</option>
                <option value="18:15">18:15</option>
                <option value="18:30">18:30</option>
                <option value="18:45">18:45</option>
                <option value="19:00">19:00</option>
                <option value="19:15">19:15</option>
                <option value="19:30">19:30</option>
                <option value="19:45">19:45</option>
                <option value="20:00">20:00</option>
                <option value="20:15">20:15</option>
                <option value="20:30">20:30</option>
                <option value="20:45">20:45</option>
                <option value="21:00">21:00</option>
            </select>
                </div>
                <div class="form-group-full">
                <label for="allergies">Allergies</label>
                <select class="form-select" name="allergies" id="allergies" required>
                <option value="1">Aucune</option>
                <option value="2">Gluten</option>
                <option value="3">Oeufs</option>
                <option value="4">Lait</option>
                <option value="5">Arachides</option>
                <option value="6">Fruits à coques</option>
                <option value="7">Crustacés / Poissons</option>
                <option value="8">Autres</option>
            </select>
                </div>
                <div>
                <button type="submit" class="btn-reza">Réserver</button>
                </div>
            
        </form>
    </div>
</main>



<?php 
include './Assets/includes/footer.html';
?>