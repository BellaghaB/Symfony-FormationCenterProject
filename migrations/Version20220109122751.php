<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220109122751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen ADD session_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE examen ADD CONSTRAINT FK_514C8FEC613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('CREATE INDEX IDX_514C8FEC613FECDF ON examen (session_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examen DROP FOREIGN KEY FK_514C8FEC613FECDF');
        $this->addSql('DROP INDEX IDX_514C8FEC613FECDF ON examen');
        $this->addSql('ALTER TABLE examen DROP session_id');
    }
}
