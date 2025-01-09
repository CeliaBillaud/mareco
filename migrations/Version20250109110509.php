<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250109110509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE friend_requests ADD sender_id INT NOT NULL');
        $this->addSql('ALTER TABLE friend_requests ADD CONSTRAINT FK_EC63B01BF624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EC63B01BF624B39D ON friend_requests (sender_id)');
        $this->addSql('ALTER TABLE recommendation ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE recommendation ADD CONSTRAINT FK_433224D2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_433224D2A76ED395 ON recommendation (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend_requests DROP FOREIGN KEY FK_EC63B01BF624B39D');
        $this->addSql('ALTER TABLE recommendation DROP FOREIGN KEY FK_433224D2A76ED395');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_EC63B01BF624B39D ON friend_requests');
        $this->addSql('ALTER TABLE friend_requests DROP sender_id');
        $this->addSql('DROP INDEX IDX_433224D2A76ED395 ON recommendation');
        $this->addSql('ALTER TABLE recommendation DROP user_id');
    }
}
