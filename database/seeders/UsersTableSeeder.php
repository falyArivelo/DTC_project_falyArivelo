<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insérer 10 utilisateurs avec des données réelles
        DB::table('users')->insert([
            // PROFS
            [
                'idUser' => 1,
                'nom' => 'solo',
                'prenom' => 'rakoto',
                'genre' => 'F',
                'adresse' => 'Antarandolo',
                'dateNaissance' => '1967-01-01',
                'email' => 'solo@gmail.com',
                'password' => bcrypt('solo'),
                'photo' => 'face1.jpg'
            ],
            [
                'idUser' => 2,
                'nom' => 'jean',
                'prenom' => 'baptiste',
                'genre' => 'M',
                'adresse' => 'Tsaramandroso',
                'dateNaissance' => '1960-01-01',
                'email' => 'jean@gmail.com',
                'password' => bcrypt('jean'),
                'photo' => 'face2.jpg'

            ],
            [
                'idUser' => 3,
                'nom' => 'laurent',
                'prenom' => 'rabe',
                'genre' => 'M',
                'adresse' => 'Ambozotany',
                'dateNaissance' => '1975-01-01',
                'email' => 'laurent@gmail.com',
                'password' => bcrypt('laurent'),
                'photo' => 'face3.jpg'

            ],
            [
                'idUser' => 4,
                'nom' => 'Matilde',
                'prenom' => 'Raben',
                'genre' => 'F',
                'adresse' => 'Mahamanina',
                'dateNaissance' => '1985-01-01',
                'email' => 'matilde@gmail.com',
                'password' => bcrypt('matilde'),
                'photo' => 'face4.jpg'

            ],
            [
                'idUser' => 5,
                'nom' => 'Lea',
                'prenom' => 'barija',
                'genre' => 'F',
                'adresse' => 'Ampasambazaha',
                'dateNaissance' => '1985-01-01',
                'email' => 'lea@gmail.com',
                'password' => bcrypt('lea'),
                'photo' => 'face5.jpg'

            ],
            [
                'idUser' => 6,
                'nom' => 'Gerard',
                'prenom' => 'basile',
                'genre' => 'M',
                'adresse' => 'Ankofafa',
                'dateNaissance' => '1965-01-01',
                'email' => 'gerard@gmail.com',
                'password' => bcrypt('gerard'),
                'photo' => 'face6.jpg'

            ],
            [
                'idUser' => 7,
                'nom' => 'fara',
                'prenom' => 'susane',
                'genre' => 'F',
                'adresse' => 'Ampitakely',
                'dateNaissance' => '1985-01-01',
                'email' => 'fara@gmail.com',
                'password' => bcrypt('fara'),
                'photo' => 'face7.jpg'

            ],
            [
                'idUser' => 8,
                'nom' => 'Romaric',
                'prenom' => 'tahina',
                'genre' => 'M',
                'adresse' => 'Ivory',
                'dateNaissance' => '1990-01-01',
                'email' => 'romaric@gmail.com',
                'password' => bcrypt('romaric'),
                'photo' => 'face8.jpg'

            ],
            [
                'idUser' => 9,
                'nom' => 'Jeanette',
                'prenom' => 'lali',
                'genre' => 'F',
                'adresse' => 'Ivory',
                'dateNaissance' => '1970-01-01',
                'email' => 'jeanette@gmail.com',
                'password' => bcrypt('jeanette'),
                'photo' => 'face9.jpg'

            ],

            // ELEVES
            [
                'idUser' => 10,
                'nom' => 'faly',
                'prenom' => 'arivelo',
                'genre' => 'M',
                'adresse' => 'Tsianolondrao',
                'dateNaissance' => '2003-01-01',
                'email' => 'faly@gmail.com',
                'password' => bcrypt('faly'),
                'photo' => 'face10.jpg'

            ],
            [
                'idUser' => 11,
                'nom' => 'tovo',
                'prenom' => 'arivelo',
                'genre' => 'M',
                'adresse' => 'Tsianolondrao',
                'dateNaissance' => '2006-01-01',
                'email' => 'tovo@gmail.com',
                'password' => bcrypt('tovo'),
                'photo' => 'face11.jpg'

            ],
            [
                'idUser' => 12,
                'nom' => 'aina',
                'prenom' => 'koto',
                'genre' => 'F',
                'adresse' => 'talatamty',
                'dateNaissance' => '2005-05-05',
                'email' => 'aina@example.com',
                'password' => bcrypt('aina'),
                'photo' => 'face12.jpg'

            ],
            [
                'idUser' => 13,
                'nom' => 'Rakoto',
                'prenom' => 'Fidy',
                'genre' => 'M',
                'adresse' => 'Antananarivo',
                'dateNaissance' => '2008-10-15',
                'email' => 'fidy@example.com',
                'password' => bcrypt('fidy'),
                'photo' => 'face13.jpg'

            ],
            [
                'idUser' => 14,
                'nom' => 'Razafindrakoto',
                'prenom' => 'Tiana',
                'genre' => 'F',
                'adresse' => 'Toamasina',
                'dateNaissance' => '2009-03-20',
                'email' => 'tiana@example.com',
                'password' => bcrypt('tiana'),
                'photo' => 'face14.jpg'

            ],
            [
                'idUser' => 15,
                'nom' => 'Ravelo',
                'prenom' => 'Mahery',
                'genre' => 'M',
                'adresse' => 'Fianarantsoa',
                'dateNaissance' => '2008-06-12',
                'email' => 'mahery@example.com',
                'password' => bcrypt('mahery'),
                'photo' => 'face15.jpg'

            ],
            [
                'idUser' => 16,
                'nom' => 'Andrianasolo',
                'prenom' => 'Miora',
                'genre' => 'F',
                'adresse' => 'Antsirabe',
                'dateNaissance' => '2007-09-25',
                'email' => 'miora@example.com',
                'password' => bcrypt('miora'),
                'photo' => 'face16.jpg'

            ], [
                'idUser' => 17,
                'nom' => 'Randriana',
                'prenom' => 'Haja',
                'genre' => 'M',
                'adresse' => 'Morondava',
                'dateNaissance' => '2010-02-08',
                'email' => 'haja@example.com',
                'password' => bcrypt('haja'),
                'photo' => 'face17.jpg'

            ],
            [
                'idUser' => 18,
                'nom' => 'Rakotoarisoa',
                'prenom' => 'Lova',
                'genre' => 'F',
                'adresse' => 'Antsiranana',
                'dateNaissance' => '2007-08-10',
                'email' => 'lova@example.com',
                'password' => bcrypt('lova'),
                'photo' => 'face18.jpg'

            ],            [
                'idUser' => 19,
                'nom' => 'Rajaonarison',
                'prenom' => 'Ranto',
                'genre' => 'M',
                'adresse' => 'Mahajanga',
                'dateNaissance' => '2004-05-15',
                'email' => 'ranto@example.com',
                'password' => bcrypt('ranto'),
                'photo' => 'face19.jpg'

            ],
            [
                'idUser' => 20,
                'nom' => 'Razafinjato',
                'prenom' => 'Hery',
                'genre' => 'M',
                'adresse' => 'Antananarivo',
                'dateNaissance' => '2006-12-22',
                'email' => 'hery@example.com',
                'password' => bcrypt('hery'),
                'photo' => 'face20.jpg'

            ],
            [
                'idUser' => 21,
                'nom' => 'Andriambahoaka',
                'prenom' => 'Mamy',
                'genre' => 'F',
                'adresse' => 'Fianarantsoa',
                'dateNaissance' => '2005-04-03',
                'email' => 'mamy@example.com',
                'password' => bcrypt('mamy'),
                'photo' => 'face21.jpg'

            ],
            [
                'idUser' => 22,
                'nom' => 'Razafiarivony',
                'prenom' => 'Tina',
                'genre' => 'F',
                'adresse' => 'Antsirabe',
                'dateNaissance' => '2003-10-08',
                'email' => 'tina@example.com',
                'password' => bcrypt('tina'),
                'photo' => 'face22.jpg'

            ],
            [
                'idUser' => 23,
                'nom' => 'Andriamaharavo',
                'prenom' => 'Zo',
                'genre' => 'M',
                'adresse' => 'Toamasina',
                'dateNaissance' => '2008-07-17',
                'email' => 'zo@example.com',
                'password' => bcrypt('zo'),
                'photo' => 'face23.jpg'

            ],
            [
                'idUser' => 24,
                'nom' => 'Ranaivo',
                'prenom' => 'Lanto',
                'genre' => 'M',
                'adresse' => 'Morondava',
                'dateNaissance' => '2006-02-12',
                'email' => 'lanto@example.com',
                'password' => bcrypt('lanto'),
                'photo' => 'face24.jpg'

            ],
            [
                'idUser' => 25,
                'nom' => 'Rasoamaharo',
                'prenom' => 'Bao',
                'genre' => 'F',
                'adresse' => 'Antananarivo',
                'dateNaissance' => '2004-09-28',
                'email' => 'bao@example.com',
                'password' => bcrypt('bao'),
                'photo' => 'face25.jpg'

            ],
            [
                'idUser' => 26,
                'nom' => 'Rakotomanga',
                'prenom' => 'lala',
                'genre' => 'M',
                'adresse' => 'Antsirabe',
                'dateNaissance' => '2007-11-05',
                'email' => 'lala@example.com',
                'password' => bcrypt('lala'),
                'photo' => 'face26.jpg'

            ],
            [
                'idUser' => 27,
                'nom' => 'Rasolondraibe',
                'prenom' => 'Prisca',
                'genre' => 'F',
                'adresse' => 'Antananarivo',
                'dateNaissance' => '2005-06-20',
                'email' => 'prisca@example.com',
                'password' => bcrypt('prisca'),
                'photo' => 'face27.jpg'

            ]
        ]);
    }
}
