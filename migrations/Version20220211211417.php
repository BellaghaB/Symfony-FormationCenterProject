<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220211211417 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE migration (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscri_formation DROP FOREIGN KEY FK_8F45EA965200282E');
        $this->addSql('DROP INDEX UNIQ_8F45EA965200282E ON inscri_formation');
        $this->addSql('ALTER TABLE inscri_formation CHANGE formation_id session_id INT NOT NULL');
        $this->addSql('ALTER TABLE inscri_formation ADD CONSTRAINT FK_8F45EA96613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8F45EA96613FECDF ON inscri_formation (session_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE migration');
        $this->addSql('ALTER TABLE inscri_formation DROP FOREIGN KEY FK_8F45EA96613FECDF');
        $this->addSql('DROP INDEX UNIQ_8F45EA96613FECDF ON inscri_formation');
        $this->addSql('ALTER TABLE inscri_formation CHANGE session_id formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE inscri_formation ADD CONSTRAINT FK_8F45EA965200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8F45EA965200282E ON inscri_formation (formation_id)');
    }
}
