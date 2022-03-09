<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220201222115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, examen_id INT NOT NULL, candidate_id INT NOT NULL, note INT NOT NULL, UNIQUE INDEX UNIQ_1323A5755C8659A (examen_id), UNIQUE INDEX UNIQ_1323A57591BD8781 (candidate_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE migration (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5755C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A57591BD8781 FOREIGN KEY (candidate_id) REFERENCES user2 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE migration');
    }
}
