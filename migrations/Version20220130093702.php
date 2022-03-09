<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130093702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formation_user2 (formation_id INT NOT NULL, user2_id INT NOT NULL, INDEX IDX_63D34A9A5200282E (formation_id), INDEX IDX_63D34A9A441B8B65 (user2_id), PRIMARY KEY(formation_id, user2_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formation_user2 ADD CONSTRAINT FK_63D34A9A5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_user2 ADD CONSTRAINT FK_63D34A9A441B8B65 FOREIGN KEY (user2_id) REFERENCES user2 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFA76ED395');
        $this->addSql('DROP INDEX IDX_404021BFA76ED395 ON formation');
        $this->addSql('ALTER TABLE formation DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE formation_user2');
        $this->addSql('ALTER TABLE formation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_404021BFA76ED395 ON formation (user_id)');
    }
}
