<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220201221239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscri_formation (id INT AUTO_INCREMENT NOT NULL, formation_id INT NOT NULL, candidate_id INT NOT NULL, etat VARCHAR(20) NOT NULL, nom_formation VARCHAR(30) NOT NULL, UNIQUE INDEX UNIQ_8F45EA965200282E (formation_id), UNIQUE INDEX UNIQ_8F45EA9691BD8781 (candidate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscri_formation ADD CONSTRAINT FK_8F45EA965200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE inscri_formation ADD CONSTRAINT FK_8F45EA9691BD8781 FOREIGN KEY (candidate_id) REFERENCES user2 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscri_formation');
    }
}
