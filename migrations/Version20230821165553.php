<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821165553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE attack_infos_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE attack_infos (id INT NOT NULL, attack_id INT DEFAULT NULL, character_id INT DEFAULT NULL, damage INT NOT NULL, stamina_use INT NOT NULL, speed INT NOT NULL, hitstun VARCHAR(255) NOT NULL, pin BOOLEAN NOT NULL, pin_duration INT NOT NULL, hyperarmor BOOLEAN NOT NULL, hyperarmor_startup INT NOT NULL, superarmor BOOLEAN NOT NULL, superarmor_startup INT NOT NULL, wallsplat BOOLEAN NOT NULL, unblockable BOOLEAN NOT NULL, undodgeable BOOLEAN NOT NULL, feintable BOOLEAN NOT NULL, guaranted BOOLEAN NOT NULL, bleed BOOLEAN NOT NULL, bleed_damage INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_30860769F5315759 ON attack_infos (attack_id)');
        $this->addSql('CREATE INDEX IDX_308607691136BE75 ON attack_infos (character_id)');
        $this->addSql('ALTER TABLE attack_infos ADD CONSTRAINT FK_30860769F5315759 FOREIGN KEY (attack_id) REFERENCES attack (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE attack_infos ADD CONSTRAINT FK_308607691136BE75 FOREIGN KEY (character_id) REFERENCES character (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE attack_infos_id_seq CASCADE');
        $this->addSql('ALTER TABLE attack_infos DROP CONSTRAINT FK_30860769F5315759');
        $this->addSql('ALTER TABLE attack_infos DROP CONSTRAINT FK_308607691136BE75');
        $this->addSql('DROP TABLE attack_infos');
    }
}
