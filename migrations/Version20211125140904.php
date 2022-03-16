<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211125140904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE praticiens (id INT AUTO_INCREMENT NOT NULL, pra_nom VARCHAR(255) DEFAULT NULL, pra_prenom VARCHAR(255) DEFAULT NULL, pra_tel VARCHAR(30) DEFAULT NULL, pra_mail VARCHAR(255) DEFAULT NULL, pra_rue VARCHAR(255) DEFAULT NULL, pra_code_postal VARCHAR(30) NOT NULL, pra_ville VARCHAR(255) DEFAULT NULL, pra_coef_notoriete SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE motifs ADD mot_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE visites ADD vst_visiteur_id INT NOT NULL, ADD vst_praticiens_id INT NOT NULL, ADD vst_date DATE NOT NULL, ADD vst_commentaire LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE praticiens');
        $this->addSql('ALTER TABLE motifs DROP mot_id');
        $this->addSql('ALTER TABLE visites DROP vst_visiteur_id, DROP vst_praticiens_id, DROP vst_date, DROP vst_commentaire');
    }
}
