<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
    <title>ESGIS-ELECTION</title>
</head>
<body>
 
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
		<div class="max-w-md w-full space-y-8">
			<div>
				<img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
				<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
					Ajout des bureaux
				</h2>
				
			</div>

			<div class="rounded bg-white max-w-md rounded overflow-hidden shadow-xl p-5">

				<form class="space-y-4" action="../../modele/connexions/cand_connexion.php" method="POST">
					<input type="hidden" name="remember" value="True">
					<div class="rounded-md shadow-sm -space-y-px">
						<div class="grid gap-6">
							<div class="col-span-12">
								<label for="Nom" class="block text-sm font-medium text-gray-700">Nom</label>
								<input type="text" name="nom" id="nom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

                            <div class="col-span-12">
								<label for="prenom" class="block text-sm font-medium text-gray-700">Prenom</label>
								<input type="text" name="prenom" id="prenom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

                            <div class="col-span-12">
								<label for="niveau" class="block text-sm font-medium text-gray-700">Niveau</label>
								<input type="text" name="niveau" id="first_name" autocomplete="given-name" placeholder="Ex:L1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

                            <div class="col-span-12">
                                                                
                                <label for="id_groupe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Groupe</label>
                                <select id="id_groupe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                                </select>

							</div>

                            <div class="col-span-12">
								<label for="grade" class="block text-sm font-medium text-gray-700">Grade</label>
								<input type="text" name="grade" id="grade" autocomplete="given-name" placeholder="Ex: Président" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

                            <div class="col-span-12">
								<label for="details" class="block text-sm font-medium text-gray-700">Détails</label>
                                 <textarea name="details" id="details" cols="30" rows="10" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>

                            <div class="col-span-12">
								<label for="note" class="block text-sm font-medium text-gray-700">Note</label>
								<input type="text" name="note" id="note" autocomplete="note" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

							<div class="col-span-12">
								<label for="email_address" class="block text-sm font-medium text-gray-700">Adresse Email</label>
								<input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>

                            <div class="col-span-12">
								<label for="pwd" class="block text-sm font-medium text-gray-700">Mot de passe</label>
								<input type="password" name="pwd" id="pwd" autocomplete="pwd" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
							</div>
						</div>
					</div>

					


					<div>
						<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
							<span class="absolute left-0 inset-y-0 flex items-center pl-3">
								<!-- Heroicon name: solid/lock-closed -->
								<svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="True">
									<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
								</svg>
							</span>
							Enregistrer
						</button>
					</div>
				</form>
		</div>
	</div>
</body>
</html>