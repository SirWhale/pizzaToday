Als je up to date wilt blijven met deze repo, gebruik dan liever git fetch -> git rebase dan git pull.
Dit om vervuiling in de commit history tegen te gaan, git pull mergd namelijk je eigen master met sourceorange/master en maakt daar weer een aparte commit van. Alleen dus doen als je veel commits naar SourceOrange moet sturen


Okay mijn lieve front-end ontwikkelaars, als je hier een pagina wilt testen ga je eerst naar app/routes.php en vul je in


			//app.routes.php
			/*eerste parameter van get is de pagina waar je hem wilt sturen, hier is bijvoorbeeld de contactpagina*/
			
			Route::get('contact', function()
			{
				return View::make('contact');
			});

Vervolgens maak je in app/views een .php bestand aan met hetzelfde naam die je aan contact gaf(dus contact.php) en doe je daar vervolgens je ding. Instructies zoals CSS en jQuery toevoegen volgt. ;)
