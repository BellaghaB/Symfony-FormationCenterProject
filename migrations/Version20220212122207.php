<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212122207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscri_formation DROP INDEX UNIQ_8F45EA96613FECDF, ADD INDEX IDX_8F45EA96613FECDF (session_id)');
        $this->addSql('ALTER TABLE inscri_formation CHANGE session_id session_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscri_formation DROP INDEX IDX_8F45EA96613FECDF, ADD UNIQUE INDEX UNIQ_8F45EA96613FECDF (session_id)');
        $this->addSql('ALTER TABLE inscri_formation CHANGE session_id session_id INT NOT NULL');
    }
}
