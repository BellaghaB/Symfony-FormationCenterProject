<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220211002049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_cand_format ADD candidat_id INT DEFAULT NULL, ADD formateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation_cand_format ADD CONSTRAINT FK_FA25205F8D0EB82 FOREIGN KEY (candidat_id) REFERENCES user2 (id)');
        $this->addSql('ALTER TABLE reclamation_cand_format ADD CONSTRAINT FK_FA25205F155D8F51 FOREIGN KEY (formateur_id) REFERENCES user2 (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FA25205F8D0EB82 ON reclamation_cand_format (candidat_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FA25205F155D8F51 ON reclamation_cand_format (formateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_cand_format DROP FOREIGN KEY FK_FA25205F8D0EB82');
        $this->addSql('ALTER TABLE reclamation_cand_format DROP FOREIGN KEY FK_FA25205F155D8F51');
        $this->addSql('DROP INDEX UNIQ_FA25205F8D0EB82 ON reclamation_cand_format');
        $this->addSql('DROP INDEX UNIQ_FA25205F155D8F51 ON reclamation_cand_format');
        $this->addSql('ALTER TABLE reclamation_cand_format DROP candidat_id, DROP formateur_id');
    }
}
