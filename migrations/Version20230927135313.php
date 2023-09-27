<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927135313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, cli_id_id INT NOT NULL, ad_adresse VARCHAR(255) NOT NULL, ad_dep VARCHAR(10) NOT NULL, ad_ville VARCHAR(100) NOT NULL, ad_pays VARCHAR(50) NOT NULL, INDEX IDX_C35F08165E33C665 (cli_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, cat_id INT DEFAULT NULL, cat_nom VARCHAR(50) NOT NULL, cat_photo VARCHAR(255) DEFAULT NULL, INDEX IDX_497DD634E6ADA943 (cat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, cli_type VARCHAR(13) NOT NULL, cli_prenom VARCHAR(50) NOT NULL, cli_nom VARCHAR(50) NOT NULL, cli_telephone VARCHAR(15) NOT NULL, cli_mail VARCHAR(255) NOT NULL, cli_mdp VARCHAR(50) NOT NULL, cli_photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, ad_id INT DEFAULT NULL, cli_id INT NOT NULL, com_prix DOUBLE PRECISION NOT NULL, com_date DATETIME NOT NULL, com_date_exp DATE NOT NULL, com_statut VARCHAR(10) DEFAULT NULL, com_paiement VARCHAR(50) DEFAULT NULL, com_fac_ref VARCHAR(50) DEFAULT NULL, com_fac_date DATE DEFAULT NULL, INDEX IDX_6EEAA67D4F34D596 (ad_id), INDEX IDX_6EEAA67DBC4EE2B0 (cli_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail (id INT AUTO_INCREMENT NOT NULL, pro_id INT NOT NULL, com_id INT NOT NULL, det_qte INT NOT NULL, det_pro_prix DOUBLE PRECISION NOT NULL, INDEX IDX_2E067F93C3B7E4BA (pro_id), INDEX IDX_2E067F93748C0F37 (com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, fou_nom VARCHAR(50) NOT NULL, fou_adresse VARCHAR(255) NOT NULL, fou_dep VARCHAR(10) NOT NULL, fou_ville VARCHAR(100) NOT NULL, fou_pays VARCHAR(50) NOT NULL, fou_telephone VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livpro (id INT AUTO_INCREMENT NOT NULL, pro_id INT NOT NULL, liv_id INT NOT NULL, det_qte INT NOT NULL, INDEX IDX_80778B13C3B7E4BA (pro_id), INDEX IDX_80778B138D8298DC (liv_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, com_id INT DEFAULT NULL, liv_ship_date DATE DEFAULT NULL, liv_reception_date DATE DEFAULT NULL, INDEX IDX_A60C9F1F748C0F37 (com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, cat_id INT NOT NULL, fou_id INT NOT NULL, pro_libelle VARCHAR(50) NOT NULL, pro_description VARCHAR(255) NOT NULL, pro_prix DOUBLE PRECISION NOT NULL, pro_photo VARCHAR(255) NOT NULL, pro_ref VARCHAR(50) NOT NULL, INDEX IDX_29A5EC27E6ADA943 (cat_id), INDEX IDX_29A5EC27B1ECE1F4 (fou_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F08165E33C665 FOREIGN KEY (cli_id_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD634E6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D4F34D596 FOREIGN KEY (ad_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DBC4EE2B0 FOREIGN KEY (cli_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE detail ADD CONSTRAINT FK_2E067F93C3B7E4BA FOREIGN KEY (pro_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE detail ADD CONSTRAINT FK_2E067F93748C0F37 FOREIGN KEY (com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE livpro ADD CONSTRAINT FK_80778B13C3B7E4BA FOREIGN KEY (pro_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE livpro ADD CONSTRAINT FK_80778B138D8298DC FOREIGN KEY (liv_id) REFERENCES livraison (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F748C0F37 FOREIGN KEY (com_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27E6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27B1ECE1F4 FOREIGN KEY (fou_id) REFERENCES fournisseur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F08165E33C665');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD634E6ADA943');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D4F34D596');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DBC4EE2B0');
        $this->addSql('ALTER TABLE detail DROP FOREIGN KEY FK_2E067F93C3B7E4BA');
        $this->addSql('ALTER TABLE detail DROP FOREIGN KEY FK_2E067F93748C0F37');
        $this->addSql('ALTER TABLE livpro DROP FOREIGN KEY FK_80778B13C3B7E4BA');
        $this->addSql('ALTER TABLE livpro DROP FOREIGN KEY FK_80778B138D8298DC');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F748C0F37');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27E6ADA943');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27B1ECE1F4');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE detail');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE livpro');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
