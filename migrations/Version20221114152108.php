<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221114152108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD image VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP image, CHANGE titre titre VARCHAR(50) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE lieux lieux VARCHAR(50) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE gat_name gat_name VARCHAR(50) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE gategorie_evenement CHANGE nom nom VARCHAR(50) NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
