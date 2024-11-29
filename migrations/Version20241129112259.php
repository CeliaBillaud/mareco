<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241129112259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend_requests ADD sender_id INT NOT NULL, ADD receiver_id INT NOT NULL, ADD status VARCHAR(255) NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE friend_requests ADD CONSTRAINT FK_EC63B01BF624B39D FOREIGN KEY (sender_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE friend_requests ADD CONSTRAINT FK_EC63B01BCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_EC63B01BF624B39D ON friend_requests (sender_id)');
        $this->addSql('CREATE INDEX IDX_EC63B01BCD53EDB6 ON friend_requests (receiver_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend_requests DROP FOREIGN KEY FK_EC63B01BF624B39D');
        $this->addSql('ALTER TABLE friend_requests DROP FOREIGN KEY FK_EC63B01BCD53EDB6');
        $this->addSql('DROP INDEX IDX_EC63B01BF624B39D ON friend_requests');
        $this->addSql('DROP INDEX IDX_EC63B01BCD53EDB6 ON friend_requests');
        $this->addSql('ALTER TABLE friend_requests DROP sender_id, DROP receiver_id, DROP status, DROP created_at, DROP updated_at');
    }
}
