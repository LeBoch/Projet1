<?php
require_once('pdo.php');
require_once('helpers.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grand gites du Larzac</title>
</head>

<body style="display: flex; flex-direction: column; justify-content: space-between; min-height: 100vh;">
  <div style="flex: 1">
    <nav class="navbar bg-body-tertiary ">
      <div class="container-fluid p-3 text-primary-emphasis bg-success-subtle border border-success-subtle rounded-3 ">
        <a class="navbar-brand" href="index.php">Grand gite du Larzac</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="herbegement.php">Hébergement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Restauration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Galeries Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Partenaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled ">Informations légales</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>