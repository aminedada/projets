function after_connect()
{
	$("#connexion").css("display","none");
	$("body").append($("<div>").attr("id", "profile").text("Notification"));

	$("body").append($("<div>").attr("id", "ressource"))	

	$("#ressource").append("<img id='img_cristal' src='cristal_img.jpeg'/>")
	$("#ressource").append("<div id='amount_cri'>")

	$("#ressource").append("<img id='img_metal' src='metal_img.jpg'/>")
	$("#ressource").append("<div>")
	$("#ressource > div").eq(1).attr("id", "amount_met")

	setInterval(function(){ 
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/crystalmines",
			type: "GET",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				$("#prod_cri").empty()
				$("#prod_cri").append("Production : " + data.production + " / min")
				$("#niveau_cri").empty()
				$("#niveau_cri").append("Niveau : " + data.level)
				$("#amount_cri").empty()
				$("#amount_cri").append(data.amount)
			},
		})
	}, 1000);

	$("body").append($("<div>").attr("id", "mine_cristal").text("Mine de Cristal"));
	var div = $("<div>").attr({"id":"niveau_cri", "class":"niveau"}).text("Niveau : ");
	$("#mine_cristal").append(div);
	div = $("<div>").attr({"id":"prod_cri", "class":"prod"}).text("Production : ");
	$("#mine_cristal").append(div);
	var btn = $("<button>").attr({"id":"cri_lv", "class":"lv_up"}).text("Level Up");
	btn.click(function(){
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/crystalmines/levelUp",
			type: "PUT",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				alert("Vous venez d'utiliser : " + data.costNext.metal + " Metal et " + data.costNext.crystal + " Cristal pour l'amelioration")
			},
			error: function(data) {
				if ($.contains(data, "levelUpFinish") == false)
					alert("Votre amelioration est en cours. Veuillez patienter.");
				else
					alert("Vous n'avez pas assez de matiere.");
			},
		});
	});
	$("#mine_cristal").append(btn);

	$("body").append($("<div>").attr("id", "Usine").text("Usine"));
	$("#Usine").append("<div>")
	$("#Usine > div").attr("id", "niveau_usi").attr("class", "niveau").text("Niveau : ")
	$("#Usine").append("<div>")
	$("#Usine > div").eq(1).attr("id", "quant").attr("class", "niveau").text("Droides : ")
	$("#Usine").append("<button>")
	$("#Usine > button").attr("id", "usi_lv").attr("class", "lv_up").text("Level Up")
	$("#Usine").append("<button>")
	$("#Usine > button").eq(1).attr("id", "usi_but").text("Add droid")

	setInterval(function(){ 
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/droids",
			type: "GET",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				$("#quant").empty()
				$("#quant").append("Droides : Niveau 1 - " + data.troops[1])
			},
		})
	}, 1000);

	$("#usi_but").click(function(){
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/factorys/add_droid",
			type: "PUT",
			data: {level: 1},
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				alert("Vous venez d'utiliser : " + data.costNext.metal + " Metal et " + data.costNext.crystal + " Cristal pour un Droide")
			},
			error: function(data) {
				if ($.contains(data, "err") == true)
					alert("Vous manquez de ressource.");
			},
		});
	});
	
	setInterval(function(){ 
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/factorys",
			type: "GET",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				$("#niveau_usi").empty()
				$("#niveau_usi").append("Niveau : " + data.level)
			},
		})
	}, 1000);

	$("#usi_lv").click(function(){
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/factorys/levelUp",
			type: "PUT",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				alert("Vous venez d'utiliser : " + data.costNext.metal + " Metal et " + data.costNext.crystal + " Cristal pour l'amelioration")
			},
			error: function(data) {
				if ($.contains(data, "levelUpFinish") == false)
					alert("Votre amelioration est en cours. Veuillez patienter.");
				else
					alert("Vous n'avez pas assez de matiere.");
			},
		});
	});

	$("body").append($("<div>").attr("id", "bataille").text("Interface de Combat"));
	$("body").append($("<center>").attr("id", "center"));
	$("#center").append($("#bataille"))
	$("#bataille").append("<div>")
	$("#bataille > div").attr("id", "nbr_id").text("Attaque vers l'ID")
	$("#bataille").append("<input>")
	$("#bataille > input").attr("id", "id_atk")
	$("#bataille").append("<div>")
	$("#bataille > div").eq(1).attr("id", "nbr_droid").text("Nombres de Droides")
	$("#bataille").append("<input>")
	$("#bataille > input").eq(1).attr("id", "qte_droid")
	$("#bataille").append("<button>")
	$("#bataille > button").attr("id", "btn_atk").text("Attaque")

	$("#btn_atk").click(function () {
			$.ajax({
				url: "http://163.5.245.219:3000/api/1/droids/attack/" + $("#id_atk").val(),
				type: "PUT",
				xhrFields: { withCredentials: true },
				data: { "1" : droid_qte},
				username: "tan_k@etna-alternance.net",
				password: "W5cgmHhZ",
				success: function(data) {
					alert("L'assault est lancé !")
				},
		}); 
	});
	setInterval(function(){ 
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/metalmines",
			type: "GET",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				$("#prod_met").empty()
				$("#prod_met").append("Production : " + data.production + " / min")
				$("#niveau_met").empty()
				$("#niveau_met").append("Niveau : " + data.level)
				$("#amount_met").empty()
				$("#amount_met").append(data.amount)
			},
		}); 
	}, 1000);

	$("body").append($("<div>").attr("id", "mine_metal").text("Mine de Metal"));

	$("#mine_metal").append("<div>")
	$("#mine_metal > div").attr("id", "niveau_met").attr("class", "niveau").text("Niveau : ")
	$("#mine_metal").append("<div>")
	$("#mine_metal > div").eq(1).attr("id", "prod_met").attr("class", "prod").text("Production : ")
	$("#mine_metal").append("<button>")
	$("#mine_metal > button").attr("id", "met_lv").attr("class", "lv_up").text("Level Up")

	$("#met_lv").click(function(){
		$.ajax({
			url: "http://163.5.245.219:3000/api/1/metalmines/levelUp",
			type: "PUT",
			xhrFields: { withCredentials: true },
			username: "tan_k@etna-alternance.net",
			password: "W5cgmHhZ",
			success: function(data) {
				alert("Vous venez d'utiliser : " + data.costNext.metal + " Metal et " + data.costNext.crystal + " Cristal pour l'amelioration")
			},
			error: function(data) {
				if ($.contains(data, "levelUpFinish") == false)
					alert("Votre amelioration est en cours. Veuillez patienter.");
				else
					alert("Vous n'avez pas assez de matiere.");
			},
		});
	});
}

$("#co").click(function () {
	$.ajax({
		url: "http://163.5.245.219:3000/api/1/players/login",
		type: "POST",
		data:{"username": $("#login").val(), "password": $("#password").val()},
		xhrFields: { withCredentials: true },
		username: "tan_k@etna-alternance.net",
		password: "W5cgmHhZ",
		success: function(data) {
			after_connect();
		},
		error: function() {
			alert("NO");
		},
	});
});



