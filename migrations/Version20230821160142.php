<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821160142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE character_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE character (id INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, faction VARCHAR(255) NOT NULL, health INT NOT NULL, stamina INT NOT NULL, guard_type VARCHAR(255) NOT NULL, guard_direction VARCHAR(255) NOT NULL, unlock_enhanced BOOLEAN NOT NULL, sprint_speed NUMERIC(10, 0) NOT NULL, lock_speed NUMERIC(10, 0) NOT NULL, forward_dodge_recovery INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE character_id_seq CASCADE');
        $this->addSql('DROP TABLE character');
    }
}
