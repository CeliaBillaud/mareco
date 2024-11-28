| Route                    | Nom                | Controller          | Template              |Description                               |
|-------------------------|--------------------|--------------------|----------------------|-------------------------------------------|
| `/`                     | `app_home`         | HomeController     | home.html.twig       | Landing page avec login/inscription        |
| `/recos`                | `app_reco`        | RecoController      | recos/index.html.twig| Feed principal des recommandations        |
| `/recos/{id}`           | `app_reco_show`    | RecoController     | recos/show.html.twig | Détail d'une recommandation               |
| `/mes-recos`            | `app_myreco`    | MyRecoController   |     my/index.html.twig   | Liste et gestion de mes recommandations    |
| `/mes-recos/ajouter  `  | `app_myreco_new`    | MyRecoController   | my/new.html.twig     | Création d'une recommandation             |
| `/mes-recos/{id}`       | `app_myreco_show` | MyRecoController   | my/show.html.twig    | Vue détaillée de ma recommandation        |
| `/mes-recos/{id}/edit`  | `app_myreco_edit`    | MyRecoController   | my/edit.html.twig    | Modification d'une recommandation         |
| `/connexion`             | `app_user_login`      | UserController  |       profile/index.html.twig| connexion               |
| `/inscription`           | `app_user_new`      | UserController  |       profile/index.html.twig| connexion               |
| `/deconnexion`           | `app_user_logout`      | User     Controller  | profile/index.html.twig| déconnexion               |
| `/profil`               | `app_profile`      | ProfileController  | profile/index.html.twig| Gestion du profil et amis ?               |

