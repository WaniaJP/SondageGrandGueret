<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230312204728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aliment (id INT AUTO_INCREMENT NOT NULL, groupe_id INT NOT NULL, sous_groupe_id INT NOT NULL, sous_sous_groupe_id INT NOT NULL, information_nutritionelle_id INT NOT NULL, nom_fr VARCHAR(255) NOT NULL, nom_scientifique VARCHAR(255) DEFAULT NULL, INDEX IDX_70FF972B7A45358C (groupe_id), INDEX IDX_70FF972B614CDEC3 (sous_groupe_id), INDEX IDX_70FF972B1C762777 (sous_sous_groupe_id), UNIQUE INDEX UNIQ_70FF972BD0FC260F (information_nutritionelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, commentaire LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_sondage (sondage_id INT NOT NULL, aliment_id INT NOT NULL, INDEX IDX_12B6484A415B9F11 (aliment_id), PRIMARY KEY(sondage_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information_nutritionelle (id INT AUTO_INCREMENT NOT NULL, energie_reglement_ue_k_j100g NUMERIC(10, 7) DEFAULT NULL, energie_reglement_ue_kcal100g NUMERIC(10, 7) DEFAULT NULL, energie_nxfacteur_jones_k_j100g NUMERIC(10, 7) DEFAULT NULL, energie_nxfacteur_jones_kca100g NUMERIC(10, 7) DEFAULT NULL, eau_g100g NUMERIC(10, 7) DEFAULT NULL, proteines_nxfacteur_jones_g100g NUMERIC(10, 7) DEFAULT NULL, proteines_nx625_g100g NUMERIC(10, 7) DEFAULT NULL, glucides_g100g NUMERIC(10, 7) DEFAULT NULL, lipides_g100g NUMERIC(10, 7) DEFAULT NULL, sucres_g100g NUMERIC(10, 7) DEFAULT NULL, fructose_g100g NUMERIC(10, 7) DEFAULT NULL, galactose_g100g NUMERIC(10, 7) DEFAULT NULL, glucose_g100g NUMERIC(10, 7) DEFAULT NULL, lactose_g100g NUMERIC(10, 7) DEFAULT NULL, maltose_g100g NUMERIC(10, 7) DEFAULT NULL, saccharose_g100g NUMERIC(10, 7) DEFAULT NULL, amidon_g100g NUMERIC(10, 7) DEFAULT NULL, fibres_alimentaires_g100g NUMERIC(10, 7) DEFAULT NULL, polyols_totaux_g100g NUMERIC(10, 7) DEFAULT NULL, cendres_g100g NUMERIC(10, 7) DEFAULT NULL, alcool_g100g NUMERIC(10, 7) DEFAULT NULL, acides_organiques_g100g NUMERIC(10, 7) DEFAULT NULL, ag_satures_g100g NUMERIC(10, 7) DEFAULT NULL, ag_monoinsatures_g100g NUMERIC(10, 7) DEFAULT NULL, ag_polyinsatures_g100g NUMERIC(10, 7) DEFAULT NULL, ag_butyrique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_capro_que_g100g NUMERIC(10, 7) DEFAULT NULL, ag_caprylique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_caprique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_laurique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_myristique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_palmitique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_stearique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_oleique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_linoleique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_alphanulllinolenique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_arachidonique_g100g NUMERIC(10, 7) DEFAULT NULL, ag_epa_g100g NUMERIC(10, 7) DEFAULT NULL, ag_dha_g100g NUMERIC(10, 7) DEFAULT NULL, cholesterol_mg100g NUMERIC(10, 7) DEFAULT NULL, sel_chlorure_de_sodium_g100g NUMERIC(10, 7) DEFAULT NULL, calcium_mg100g NUMERIC(10, 7) DEFAULT NULL, chlorure_mg100g NUMERIC(10, 7) DEFAULT NULL, cuivre_mg100g NUMERIC(10, 7) DEFAULT NULL, fer_mg100g NUMERIC(10, 7) DEFAULT NULL, iode_microg100g NUMERIC(10, 7) DEFAULT NULL, magnesium_mg100g NUMERIC(10, 7) DEFAULT NULL, manganese_mg100g NUMERIC(10, 7) DEFAULT NULL, phosphore_mg100g NUMERIC(10, 7) DEFAULT NULL, potassium_mg100g NUMERIC(10, 7) DEFAULT NULL, selenium_microg100g NUMERIC(10, 7) DEFAULT NULL, sodium_mg100g NUMERIC(10, 7) DEFAULT NULL, zinc_mg100g NUMERIC(10, 7) DEFAULT NULL, retinol_microg100g NUMERIC(10, 7) DEFAULT NULL, beta_carotene_microg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_d_microg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_e_mg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_k1_microg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_k2_microg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_c_mg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_b1_thia_mg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_b2_ribo_mg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_b3_pp_nia_mg100g NUMERIC(10, 7) DEFAULT NULL, vitamine_b5_acide_pan_mg100g NUMERIC(10, 7) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sondage (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_id INT NOT NULL, date_creation DATE NOT NULL, INDEX IDX_7579C89FC6EE5C49 (id_utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_groupe (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_sous_groupe (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(5) NOT NULL, ville VARCHAR(255) NOT NULL, telephone VARCHAR(10) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE aliment ADD CONSTRAINT FK_70FF972B7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE aliment ADD CONSTRAINT FK_70FF972B614CDEC3 FOREIGN KEY (sous_groupe_id) REFERENCES sous_groupe (id)');
        $this->addSql('ALTER TABLE aliment ADD CONSTRAINT FK_70FF972B1C762777 FOREIGN KEY (sous_sous_groupe_id) REFERENCES sous_sous_groupe (id)');
        $this->addSql('ALTER TABLE aliment ADD CONSTRAINT FK_70FF972BD0FC260F FOREIGN KEY (information_nutritionelle_id) REFERENCES information_nutritionelle (id)');
        $this->addSql('ALTER TABLE detail_sondage ADD CONSTRAINT FK_12B6484ABAF4AE56 FOREIGN KEY (sondage_id) REFERENCES sondage (id)');
        $this->addSql('ALTER TABLE detail_sondage ADD CONSTRAINT FK_12B6484A415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89FC6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aliment DROP FOREIGN KEY FK_70FF972B7A45358C');
        $this->addSql('ALTER TABLE aliment DROP FOREIGN KEY FK_70FF972B614CDEC3');
        $this->addSql('ALTER TABLE aliment DROP FOREIGN KEY FK_70FF972B1C762777');
        $this->addSql('ALTER TABLE aliment DROP FOREIGN KEY FK_70FF972BD0FC260F');
        $this->addSql('ALTER TABLE detail_sondage DROP FOREIGN KEY FK_12B6484ABAF4AE56');
        $this->addSql('ALTER TABLE detail_sondage DROP FOREIGN KEY FK_12B6484A415B9F11');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89FC6EE5C49');
        $this->addSql('DROP TABLE aliment');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE detail_sondage');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE information_nutritionelle');
        $this->addSql('DROP TABLE sondage');
        $this->addSql('DROP TABLE sous_groupe');
        $this->addSql('DROP TABLE sous_sous_groupe');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
