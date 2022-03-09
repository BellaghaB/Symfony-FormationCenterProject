<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212132409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscri_formation ADD CONSTRAINT FK_8F45EA96613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8F45EA96613FECDF ON inscri_formation (session_id)');
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D4C0D24146');
        $this->addSql('DROP INDEX IDX_D044D5D4C0D24146 ON session');
        $this->addSql('ALTER TABLE session DROP insrits_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE inscri_formation DROP FOREIGN KEY FK_8F45EA96613FECDF');
        $this->addSql('DROP INDEX UNIQ_8F45EA96613FECDF ON inscri_formation');
        $this->addSql('ALTER TABLE session ADD insrits_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4C0D24146 FOREIGN KEY (insrits_id) REFERENCES inscri_formation (id)');
        $this->addSql('CREATE INDEX IDX_D044D5D4C0D24146 ON session (insrits_id)');
    }
}
