<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
	public function worldmap(Request $request) {
		return view('community.map');
	}

	public function contact(Request $request) {
		// Bon la DB me saoule, je le fais a la main et je setuperais ca demain
		$communities = [
			[
				"name" => "Global online",
				"region" => "Online",
				"twitter" => "",
				"discord" => "https://discord.gg/CzsRN83",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Global tounrois",
				"region" => "Online",
				"twitter" => "",
				"discord" => "https://discord.gg/FxW8KZa",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Global offline/Paris",
				"region" => "Paris",
				"twitter" => "",
				"discord" => "https://discord.gg/uqmpRnX",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Bordeaux",
				"region" => "Bordeaux",
				"twitter" => "https://twitter.com/Asso_TCT",
				"discord" => "https://discord.gg/G6Fwd5B",
				"facebook" => "https://www.facebook.com/club.tct/",
				"other" => ""
			],
			[
				"name" => "Caen",
				"region" => "Caen",
				"twitter" => "",
				"discord" => "https://discord.gg/gsnfCVw",
				"facebook" => "https://www.facebook.com/NorGeekOfficiel/",
				"other" => ""
			],
			[
				"name" => "Haute Savoie",
				"region" => "Haute Savoie",
				"twitter" => "https://twitter.com/SuperSmashYaute",
				"discord" => "https://discord.gg/8xbbaPD",
				"facebook" => "https://www.facebook.com/supersmashyaute/",
				"other" => ""
			],
			[
				"name" => "Lille",
				"region" => "",
				"twitter" => "https://twitter.com/Salty_Arena",
				"discord" => "",
				"facebook" => "https://www.facebook.com/groups/1487933521523024/",
				"other" => ""
			],
			[
				"name" => "Limoges",
				"region" => "Limoges",
				"twitter" => "",
				"discord" => "https://discord.gg/RFKUJyW",
				"facebook" => "https://www.facebook.com/NewjabesTeam/",
				"other" => ""
			],
			[
				"name" => "Lorraine",
				"region" => "Lorraine",
				"twitter" => "https://twitter.com/SmashLorraine",
				"discord" => "https://discord.gg/C9hjHpB",
				"facebook" => "https://www.facebook.com/smashlorraine/",
				"other" => ""
			],
			[
				"name" => "Metz",
				"region" => "Metz",
				"twitter" => "",
				"discord" => "https://discord.gg/UbUZkpq",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Marseille",
				"region" => "Marseille",
				"twitter" => "https://twitter.com/ShieldBreakSud",
				"discord" => "https://discord.gg/GFY8JTN",
				"facebook" => "https://www.facebook.com/ShieldBreaksud/",
				"other" => ""
			],
			[
				"name" => "Montpellier",
				"region" => "Montpellier",
				"twitter" => "https://twitter.com/HitWaveMTPL",
				"discord" => "https://discord.gg/22bc3nz",
				"facebook" => "https://www.facebook.com/HitWaveMontpellier/",
				"other" => "https://twitter.com/SmashALez?s=09",
				"otherSource" => trans("contact.tbody.twitter")
			],
			[
				"name" => "Nantes",
				"region" => "Nantes",
				"twitter" => "https://twitter.com/Beatby44",
				"discord" => "https://discord.gg/6NnjQcp",
				"facebook" => "https://www.facebook.com/groups/872203626207063/",
				"other" => "https://www.facebook.com/groups/872203626207063/",
				"otherSource" => trans("contact.tbody.facebook")
			],
			[
				"name" => "Nice",
				"region" => "Nice",
				"twitter" => "https://twitter.com/SAC_Smash",
				"discord" => "https://discord.gg/etcsUb7",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Pau",
				"region" => "Pau",
				"twitter" => "",
				"discord" => "https://discord.gg/bZbEWXN",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Reims",
				"region" => "Reims",
				"twitter" => "",
				"discord" => "https://discord.gg/8MFpWzf",
				"facebook" => "https://www.facebook.com/Smash-Bros-Reims-262994394316980/",
				"other" => ""
			],
			[
				"name" => "Rouen",
				"region" => "Rouen",
				"twitter" => "https://twitter.com/AssoDoubleKO",
				"discord" => "https://discord.gg/WWF5SVj",
				"facebook" => "https://www.facebook.com/DoubleKoAsso/",
				"other" => "http://doubleko.fr/",
				"otherSource" => trans("contact.tbody.website")
			],
			[
				"name" => "Strasbourg",
				"region" => "Strasbourg",
				"twitter" => "https://twitter.com/SmashBrosStras?s=09",
				"discord" => "https://discord.gg/Z2BEQsT",
				"facebook" => "",
				"other" => ""
			],
			[
				"name" => "Toulouse",
				"region" => "Toulouse",
				"twitter" => "https://twitter.com/PinkCitySmash",
				"discord" => "https://discord.gg/2Ez6AaC",
				"facebook" => "https://www.facebook.com/PinkCitySmash/",
				"other" => "https://twitter.com/MeltdownTLSE",
				"otherSource" => trans("contact.tbody.twitter")
			]
		] ;
		return view('community.contact', [
			"communities" => $communities
		]);
	}
}
