
$(document).ready(function(){
//eigene Methoden
	jQuery.validator.addMethod("namen", function(value, element)
	{	return this.optional(element) || /^[a-zA-ZüÜäÄöÖéèàâç ]*$/.test(value);
	},	"Ungültige Zeichen!")
	jQuery.validator.classRuleSettings.namen = {namen: true};

  jQuery.validator.addMethod("emails", function(value, element)
	{	return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
}, 	"Bitte eine gültige E-Mail Adresse eingeben")
	jQuery.validator.classRuleSettings.emails = {emails: true};

	jQuery.validator.addMethod("postlz", function(value, element)
	{	return this.optional(element) || /^([0-9\s\(\)\+\-\/]{4,5})*$/.test(value);
	}, 	"Postleitzahl? Nur Zahlen und 4- oder 5stellig")
	jQuery.validator.classRuleSettings.postlz = {postlz: true};

	jQuery.validator.addMethod("street", function(value, element)
	{	return this.optional(element) || /^[a-zA-Z0-9 .,]+$/.test(value);
	}, 	"Geben Sie die Strasse ein und Nummer")
	jQuery.validator.classRuleSettings.street = {street: true};

//validieren
	$("#userform").validate({
//Regeln - namen müssen mit Formular übereinstimmen
	rules: {

		username: {
			required: true,
			minlength:3,
	    remote: { type: "post",
				url: "../php/user.php"
			}
		},

		nname: {
			required: true,
			namen: true,
			minlength:1
		},

		vname: {
			required: true,
			namen: true,
			minlength:1
		},

		email: {
			required: true,
			emails: true
		},

		ort: {
			required: true
		},

		plz: {
			required: true,
			postlz: true
		},

		strasse: {
			required:true,
			street: true
		},

		password: {
			required: true,
			minlength: 8
		},

		confirm_password: {
			required: true,
			minlength: 8,
			equalTo: "#password"
		}
	},


success: function(element) {
		element
		.text('OK!').addClass('valid')
		.closest('.control-group').removeClass('error').addClass('success');
	},
//Ausgabe

//eigene Ausgabenachrichten eintragen
	messages: {

		username: {
			required: "Name eingeben",
			minlength: "Name zu Kurz, mindestens 3 Zeichen",
			remote: "Name existiert schon"
		},

	  nname: {
			required: "Bitte Vorname eingeben",
			minlength: "Name zu Kurz, mindestens 1 Buchstaben"
		},

		vname: {
			required: "Bitte Nachnamen eingeben",
			minlength: "Name zu Kurz, mindestens 1 Buchstaben"
		},

		email: {
			required: "Bitte eine E-Mail Adresse eingeben",
			email: "Bitte eine gültige E-Mail Adresse eingeben"
		},

		ort: {
	  	required: "Bitte ihren Ort eingeben"
	  },

	  plz: {
	    required: "Bitte eine 4 oder 5 stellige Postleitzahl eigeben",
	    postlz: "Es werden nur 4- oder 5stellige Postleitzahlen akzeptiert"
	  },

		password: {
			required: "Bitte Passwort eingeben, mindestens 8 Zeichen und eine Zahl oder einem Sonderzeichen",
			minlength: "Passwort zu Kurz, mindestens 8 Zeichen und eine Zahl oder einem Sonderzeichen"
		},

		confirm_password: {
			required: "Bitte das Passwort nochmal eingeben",
			minlength: "Passwort zu Kurz, mindestens 8 Zeichen und eine Zahl oder einem Sonderzeichen",
			equalTo: "Passwörter stimmen nicht überein"
		},
	},
	});
});
