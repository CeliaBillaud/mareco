## **Dictionnaire de données**

### **Table `users`**

| **Champ**       | **Type**        | **Null** | **Default**        | **Description**                                        |
|------------------|-----------------|----------|--------------------|--------------------------------------------------------|
| `id`            | INT             | Non      | AUTO_INCREMENT     | Identifiant unique de l'utilisateur.                  |
| `email`         | STRING(180)     | Non      | -                  | Adresse e-mail unique.                                 |
| `password`      | STRING(255)     | Non      | -                  | Mot de passe encodé.                                   |
| `username`      | STRING(100)     | Non      | -                  | Nom d'utilisateur ou pseudonyme.                      |
| `created_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de création de l'utilisateur.                    |
| `updated_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de dernière modification.                        |

---

### **Table `recommendations`**

| **Champ**       | **Type**        | **Null** | **Default**        | **Description**                                        |
|------------------|-----------------|----------|--------------------|--------------------------------------------------------|
| `id`            | INT             | Non      | AUTO_INCREMENT     | Identifiant unique de la recommandation.              |
| `user_id`       | INT (FK)        | Non      | -                  | Identifiant de l'utilisateur qui a créé la reco.       |
| `title`         | STRING(255)     | Non      | -                  | Titre de la recommandation.                           |
| `content`       | TEXT            | Non      | -                  | Description ou contenu de la recommandation.          |
| `type`          | STRING(50)      | Non      | -                  | Type de la recommandation (livre, film, etc.).         |
| `link`          | STRING(255)     | Oui      | NULL               | Lien externe associé à la reco (optionnel).           |
| `created_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de création de la recommandation.                |
| `updated_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de dernière modification.                        |

---

### **Table `friend_requests`**

| **Champ**       | **Type**        | **Null** | **Default**        | **Description**                                        |
|------------------|-----------------|----------|--------------------|--------------------------------------------------------|
| `id`            | INT             | Non      | AUTO_INCREMENT     | Identifiant unique de la demande.                     |
| `sender_id`     | INT (FK)        | Non      | -                  | Identifiant de l'utilisateur qui envoie la demande.    |
| `receiver_id`   | INT (FK)        | Non      | -                  | Identifiant de l'utilisateur qui reçoit la demande.    |
| `status`        | ENUM            | Non      | `pending`          | Statut de la demande (`pending`, `accepted`, `rejected`). |
| `created_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de création de la demande.                       |
| `updated_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de dernière modification.                        |

---

### **Table `friends`**

| **Champ**       | **Type**        | **Null** | **Default**        | **Description**                                        |
|------------------|-----------------|----------|--------------------|--------------------------------------------------------|
| `id`            | INT             | Non      | AUTO_INCREMENT     | Identifiant unique de la relation d’amitié.            |
| `user_id`       | INT (FK)        | Non      | -                  | Identifiant de l'utilisateur dans la relation.         |
| `friend_id`     | INT (FK)        | Non      | -                  | Identifiant de l'ami lié à l'utilisateur.              |
| `created_at`    | DATETIME        | Non      | CURRENT_TIMESTAMP  | Date de création de la relation d’amitié.             |

---

## **Relations**

1. **`users` ↔ `recommendations`** :  
   Relation **OneToMany**. Un utilisateur peut avoir plusieurs recommandations.

2. **`users` ↔ `friend_requests`** :  
   - Relation **OneToMany** pour `sender` (utilisateur qui envoie des demandes).  
   - Relation **OneToMany** pour `receiver` (utilisateur qui reçoit des demandes).

3. **`users` ↔ `friends`** :  
   Relation **ManyToMany** (via `friends`), représentée par deux colonnes : `user_id` et `friend_id`.

