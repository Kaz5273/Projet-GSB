<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211125142729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE visites (id INT AUTO_INCREMENT NOT NULL, vst_praticien_id_id INT DEFAULT NULL, vst_visiteur_id_id INT DEFAULT NULL, vst_motif_id_id INT DEFAULT NULL, vst_date DATETIME DEFAULT NULL, vst_commentaire LONGTEXT DEFAULT NULL, INDEX IDX_470D3983523A12A8 (vst_praticien_id_id), INDEX IDX_470D3983974E152D (vst_visiteur_id_id), INDEX IDX_470D398324464F74 (vst_motif_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D3983523A12A8 FOREIGN KEY (vst_praticien_id_id) REFERENCES praticiens (id)');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D3983974E152D FOREIGN KEY (vst_visiteur_id_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE visites ADD CONSTRAINT FK_470D398324464F74 FOREIGN KEY (vst_motif_id_id) REFERENCES motifs (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE visites');
    }
}
