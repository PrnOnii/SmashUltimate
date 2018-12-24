<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
	public function worldmap(Request $request) {
		return view('community.map');
	}

	public function contact(Request $request) {
		// Bon la DB me saoule, je le fais a la main et je setuperais ca demain
		$bonsoir = [
			[
				"name" => "Global online",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/CzsRN83",
				"discordName" => "4EVO|Le Pugilat Des Étoiles",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Global tournois",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/FxW8KZa",
				"discordName" => "Smash Series (tournois)",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Global offline/Paris",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/uqmpRnX",
				"discordName" => "Groupe Smash Ultimate de l'ombre",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Bordeaux",
				"twitter" => "https://twitter.com/Asso_TCT",
				"twitterName" => "Tagazoo Club Talence",
				"discord" => "https://discord.gg/G6Fwd5B",
				"discordName" => "TCT Crew",
				"facebook" => "https://www.facebook.com/club.tct/",
				"facebookName" => "TCT Tagazoo Club de Talence",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Caen",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/gsnfCVw",
				"discordName" => "Smash Normandie",
				"facebook" => "https://www.facebook.com/NorGeekOfficiel/",
				"facebookName" => "NorGeek / Gaming & Esport",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Haute Savoie",
				"twitter" => "https://twitter.com/SuperSmashYaute",
				"twitterName" => "SuperSmashYaute",
				"discord" => "https://discord.gg/8xbbaPD",
				"discordName" => "Super Smash Yaute",
				"facebook" => "https://www.facebook.com/supersmashyaute/",
				"facebookName" => "Super Smash Yaute",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "La Reunion",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/zFpuBCn",
				"discordName" => "Super Smash Bros Ultimate 974",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Lille",
				"twitter" => "https://twitter.com/Salty_Arena",
				"twitterName" => "Salty Arena",
				"discord" => "",
				"discordName" => "",
				"facebook" => "https://www.facebook.com/groups/1487933521523024/",
				"facebookName" => "Smash Lille",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Limoges",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/RFKUJyW",
				"discordName" => "Smash @ Limoges",
				"facebook" => "https://www.facebook.com/NewjabesTeam/",
				"facebookName" => "Newjabes Team",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Lorraine",
				"twitter" => "https://twitter.com/SmashLorraine",
				"twitterName" => "SmashLorraine",
				"discord" => "https://discord.gg/C9hjHpB",
				"discordName" => "SmashLorraine",
				"facebook" => "https://www.facebook.com/smashlorraine/",
				"facebookName" => "Smash Lorraine",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Metz",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/UbUZkpq",
				"discordName" => "Smash @ Lyon !",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Marseille",
				"twitter" => "https://twitter.com/ShieldBreakSud",
				"twitterName" => "ShieldBreak",
				"discord" => "https://discord.gg/GFY8JTN",
				"discordName" => "Smash On Sud",
				"facebook" => "https://www.facebook.com/ShieldBreaksud/",
				"facebookName" => "Shieldbreak",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Montpellier",
				"twitter" => "https://twitter.com/HitWaveMTPL",
				"twitterName" => "HitWave",
				"discord" => "https://discord.gg/22bc3nz",
				"discordName" => "HitWave Montpellier",
				"facebook" => "https://www.facebook.com/HitWaveMontpellier/",
				"facebookName" => "HitWave",
				"other" => "https://twitter.com/SmashALez",
				"otherType" => "fab fa-twitter",
				"otherName" => "Smash À Lez"
			],
			[
				"name" => "Nantes",
				"twitter" => "https://twitter.com/Beatby44",
				"twitterName" => "Beat by 44",
				"discord" => "https://discord.gg/6NnjQcp",
				"discordName" => "SmUsh Nantes",
				"facebook" => "https://www.facebook.com/groups/872203626207063/",
				"facebookName" => "Sm44sh West",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Nice",
				"twitter" => "https://twitter.com/SAC_Smash",
				"twitterName" => "Smash Azur Community",
				"discord" => "https://discord.gg/etcsUb7",
				"discordName" => "Smash Azur Community",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Niort",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/gpDVZcx",
				"discordName" => "Canapé Fight",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Pau",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/bZbEWXN",
				"discordName" => "Pau smash gamers",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Reims",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/8MFpWzf",
				"discordName" => "-Smash Bros Reims-",
				"facebook" => "https://www.facebook.com/Smash-Bros-Reims-262994394316980/",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Rennes",
				"twitter" => "",
				"twitterName" => "",
				"discord" => "https://discord.gg/ZWp9tW9",
				"discordName" => "Super Smash Breizh",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Rouen",
				"twitter" => "https://twitter.com/AssoDoubleKO",
				"twitterName" => "Double KO",
				"discord" => "https://discord.gg/WWF5SVj",
				"discordName" => "Double KO",
				"facebook" => "https://www.facebook.com/DoubleKoAsso/",
				"facebookName" => "Double KO Asso'",
				"other" => "http://doubleko.fr/",
				"otherType" => "fas fa-globe",
				"otherName" => "Double KO"
			],
			[
				"name" => "Strasbourg",
				"twitter" => "https://twitter.com/SmashBrosStras?s=09",
				"twitterName" => "Smash Bros. Strasbourg",
				"discord" => "https://discord.gg/Z2BEQsT",
				"discordName" => "Smash Strasbourg",
				"facebook" => "",
				"facebookName" => "",
				"other" => "",
				"otherName" => "",
				"otherType" => ""
			],
			[
				"name" => "Toulouse",
				"twitter" => "https://twitter.com/PinkCitySmash",
				"twitterName" => "Pink City Smash",
				"discord" => "https://discord.gg/2Ez6AaC",
				"discordName" => "EVERYONE IS HERE!",
				"facebook" => "https://www.facebook.com/PinkCitySmash/",
				"facebookName" => "Pink City Smash",
				"other" => "https://twitter.com/MeltdownTLSE",
				"otherType" => "fab fa-twitter",
				"otherName" => "Meltdown Toulouse"
			]
		];
		$communities = Contact::all();
		return view('community.contact', [
			"communities" => $communities
		]);
	}
}
