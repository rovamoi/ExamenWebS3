<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Grape Hotel &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../../../style/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../../style/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../../../style/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../../style/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../../../style/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="../../../style/css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../../../style/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../../style/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../../../style/css/style.css">

	<!-- Modernizr JS -->
	<script src="../../../style/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
    <style>
    
        h1 {
            text-align: center;
            color: #e74c3c; /* Rouge pour le titre */
        }
    
        table {
            margin: 0 auto; /* Centrer le tableau */
            width: 80%; /* Largeur du tableau */
            border-collapse: collapse;
            margin-top: 20px;
        }
    
        th, td {
            border: 1px solid #ddd; /* Gris clair pour les bordures */
            padding: 12px;
            text-align: left;
        }
    
        th {
            background-color: #333; /* Noir pour les en-têtes */
            color: #fff; /* Texte en blanc pour contraste */
        }
    
        tbody tr:hover {
            background-color: #f2f2f2; /* Gris plus clair pour la couleur de survol */
        }
    
        /* Utilisation d'une ombre légère pour un aspect plus moderne */
        td {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Ombre noire */
        }
    
        /* Style de la police pour les en-têtes et les cellules du tableau */
        th {
            font-weight: bold;
            font-size: 14px;
            color: rgb(255, 255, 255); /* Noir pour le texte du tableau */
        } 
        td {
            font-weight: bold;
            font-size: 14px;
            color: #333; /* Noir pour le texte du tableau */
        }
    
        /* Ajout de transition pour un effet de survol plus fluide */
        tbody tr {
            transition: background-color 0.3s ease;
        }
    </style>
	<body>
		
	<div class="gtco-loader"></div>
	
	<!-- <div id="page"> -->

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo" class="cursive-font">Sweet <em>tea .</em></div>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<p class="cursive-font"><span class="intro-text-small">Sunshine tea .Toujour là pour vos soif de chaud</span></p>
							<h1 class="cursive-font">Gestion de Parcelle </h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <form action="../../traitement/parcelle.php" id="myForm" method="POST">
								
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <h5 class="cursive-font">Numero de parcelle:</h5>
                                        <input type="text" id="numero" name="numero" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <h5 class="cursive-font">Surface hectare:</h5>
                                        <input type="number" step="0.01" id="surface_hectare" name="surface_hectare" class="form-control">
                                    </div>
                                </div>
								<div class="row form-group">
									<h5 class="cursive-font">Nom variete:</h5>
                                    <select id="select" name="id_variete"></select>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
									<input type="hidden" name="id_parcelle" id="id_parcelle">
									<input type="hidden" name="action" id="action">
                                <input type="submit" class="btn btn-primary btn-block" value="Valider">
                                    </div>
                                </div>
                            </form>	
						</div>
						
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Tableau des Parcelles :</h3>
                                            <table class="table" id="table">
                                                <thead>
                                                    <tr>
                                                        <th>id_parcelle</th>
                                                        <th>numéro</th>
                                                        <th>surface_hectare</th>
														<th>id_variete</th>
														<th>nom_variete</th>
														<th>Supprimer</th>
														<th>Modifier</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@sweettea.org</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
                    <div class="gtco-widget">
						<h3>Get devlopper</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter">   ETU002649 - ROVA</i></a></li><br>
							<li><a href="#"><i class="icon-twitter">   ETU002930 - FRANCKY</i></a></li><br>
							<li><a href="#"><i class="icon-twitter">   ETU002776 - MERCIA</i></a></li><br>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2024 . All Rights Reserved.</small> 
						<small class="block">Designed by METIA</small></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../../../style/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../../style/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../../style/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../../style/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../../../style/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../../../style/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../../../style/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../../../style/js/jquery.magnific-popup.min.js"></script>
	<script src="../../../style/js/magnific-popup-options.js"></script>
	
	<script src="../../../style/js/moment.min.js"></script>
	<script src="../../../style/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="../../../style/js/main.js"></script>
	<script>
		window.addEventListener("load", function () {
			var table = document.getElementById("table");
			getListVariete();
			
			// Soumettre le formulaire
			var formulaire = document.getElementById("myForm");

			// Appeler la fonction pour créer le tableau initial
			createInitialTable(formulaire);
			
			// Fonction pour créer le tableau
			function createTable(table, data) {
				var tbody = document.createElement("tbody");
				for (let i = 0; i < data.dataParcelle.length; i++) {
					var tr = document.createElement("tr");

					// Code pour créer chaque cellule du tableau (td)

					tbody.appendChild(tr);
				}
				table.appendChild(tbody);
			}

		});

			// Fonction pour vider le contenu du tableau
			function clearTable(table) {
				var tbody = table.querySelector("tbody");
				if (tbody) {
					table.removeChild(tbody);
				}
			}
			function createTable(table, data,formulaire) {
				var tbody = document.createElement("tbody");
				var idVarietes = []; // Tableau pour stocker les ID de variété

				for (let i = 0; i < data.dataParcelle.length; i++) {
					var tr = document.createElement("tr");

					// Créer chaque cellule du tableau (td)
					var thID = document.createElement("td");
					thID.textContent = data.dataParcelle[i].id_parcelle;
					tr.appendChild(thID);

					var thnumero = document.createElement("td");
					thnumero.textContent = data.dataParcelle[i].numéro;
					tr.appendChild(thnumero);

					var thsurface_hectare = document.createElement("td");
					thsurface_hectare.textContent = data.dataParcelle[i].surface_hectare;
					tr.appendChild(thsurface_hectare);

					var thrid_variete = document.createElement("td");
					thrid_variete.textContent = data.dataParcelle[i].id_variete;
					tr.appendChild(thrid_variete);

					var thrnom_variete = document.createElement("td");
					tr.appendChild(thrnom_variete);

					var thsuppr = document.createElement("td");
					var buttonSuppr = document.createElement("button");
					buttonSuppr.textContent = "Supprimer";
					buttonSuppr.addEventListener('click', function () {
						var id = data.dataParcelle[i].id_variete;
						var xhrSuppr = createXHR();
						xhrSuppr.onreadystatechange = function () {
							if (xhrSuppr.readyState == 4) {
								if (xhrSuppr.status == 200) {
									var retour = JSON.parse(xhrSuppr.responseText);
									clearTable(table); // Mettre à jour le tableau
									createTable(table, retour, formulaire);
									// formulaire.reset(); // Réinitialiser le formulaire
								} else {
									console.log("Une erreur s'est produite lors de la requête.");
								}
							}
						};
						xhrSuppr.open("POST", "../../traitement/parcelle.php");
						xhrSuppr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						xhrSuppr.send("action=delete&id=" + id);
					});

					thsuppr.appendChild(buttonSuppr);
					tr.appendChild(thsuppr);

					var thupdate = document.createElement("td");
					var buttonUpdate = document.createElement("button");
					buttonUpdate.textContent = "Modifier";
					buttonUpdate.addEventListener('click', function () {
						var id = data.dataParcelle[i].id_parcelle;
						var nom = data.dataParcelle[i].numéro;
						var surface_hectare = data.dataParcelle[i].surface_hectare;
						var id_variete = data.dataParcelle[i].id_variete;

						document.getElementById("numero").value = nom;
						document.getElementById("surface_hectare").value = surface_hectare;

						// Mettre à jour la valeur de l'action dans le formulaire
						document.getElementById("action").value = "update";

						// Mettre à jour l'ID de la variété dans le formulaire
						document.getElementById("id_parcelle").value = id;

						// Mettre à jour la valeur sélectionnée dans la liste déroulante
						document.getElementById("select").value = id_variete;
					});

					thupdate.appendChild(buttonUpdate);
					tr.appendChild(thupdate);

					tbody.appendChild(tr);

					// Stocker l'ID de variété dans le tableau
					idVarietes.push(data.dataParcelle[i].id_variete);
				}

				// Appeler la fonction pour récupérer les noms de variété
				getVarieteNames(idVarietes, tbody);

				table.appendChild(tbody);
			}
		// Fonction pour créer le tableau initial
		function createInitialTable(formulaire) {
				var xhr = createXHR();
				xhr.open("GET", "../../traitement/parcelle.php");
				xhr.send(null);

				xhr.onreadystatechange = function () {
					if (xhr.readyState == 4) {
						if (xhr.status == 200) {
							var retour = JSON.parse(xhr.responseText);
							console.log(xhr.responseText);
							createTable(table, retour,formulaire);
						} else {
							console.log("Une erreur s'est produite lors de la requête.");
						}
					}
				};
			}
		
		function getListVariete() {
			var select = document.getElementById("select");
			var optionInit = document.createElement('option');
			optionInit.value = 0;
			optionInit.textContent = "Choisir une variété";

			var xhr = createXHR();
			xhr.open("GET", "../../traitement/parcelle.php");
			xhr.send(null);

			xhr.onreadystatechange = function () {
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						var retour = JSON.parse(xhr.responseText);
						select.innerHTML = ""; // Efface les options existantes
						select.appendChild(optionInit); // Ajoute l'option initiale
						createOptions(select, retour.listeVariete); // Crée les options pour le select
					} else {
						console.log("Une erreur s'est produite lors de la requête.");
					}
				}
			};
		}

		function createOptions(categorie, options) {
			options.forEach(function (option) {
				var optionElement = document.createElement("option");
				optionElement.value = option.id_variete;
				optionElement.textContent = option.nom;
				categorie.appendChild(optionElement);
			});
		}
		// Fonction pour récupérer les noms de variété
		function getVarieteNames(idVarietes, tbody) {
			// Créer une requête AJAX pour récupérer les noms de variété
			var xhr = new XMLHttpRequest();
			var form = new FormData();
			form.append('id_varietes', JSON.stringify(idVarietes)); // Envoyer les ID de variété au format JSON
			xhr.open("POST", "../../traitement/parcelle.php");
			
			// Définir le header Content-Type pour la requête AJAX
			xhr.setRequestHeader("Content-Type", "application/json");
			
			xhr.onreadystatechange = function () {
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						var response = JSON.parse(xhr.responseText);
						var nomsVarietes = response.nom_variete;

						// Mettre à jour les cellules du tableau avec les noms de variété correspondants
						for (let i = 0; i < nomsVarietes.length; i++) {
							var tr = tbody.children[i];
							var nom_variete = nomsVarietes[i];

							// Mettre à jour la cellule nom_variete avec le nom de la variété
							var tdNomVariete = tr.querySelector('td:nth-child(5)'); // 5 est l'indice de la colonne nom_variete (index 4)
							tdNomVariete.textContent = nom_variete;
						}
					} else {
						console.log("Une erreur s'est produite lors de la requête.");
					}
				}
			};

			xhr.send(JSON.stringify(idVarietes)); // Envoyer les données sous forme de chaîne JSON
		}

	

		function createXHR() {
                var xhr;
                try {
                    xhr = new XMLHttpRequest();
                } catch (e) {
                    alert("Une erreur s'est produite lors de la création de l'objet XMLHttpRequest.");
                    return null;
                }
                return xhr;
            }
		
	</script>
	</body>
</html>

