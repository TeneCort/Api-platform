<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191204153824 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE review CHANGE book_id book_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question CHANGE answer_id answer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer CHANGE question_id question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE book CHANGE image_id image_id INT DEFAULT NULL, CHANGE isbn isbn VARCHAR(255) DEFAULT NULL, CHANGE reviews reviews VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer CHANGE question_id question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE book CHANGE image_id image_id INT DEFAULT NULL, CHANGE isbn isbn VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE reviews reviews VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media_object CHANGE file_path file_path VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE question CHANGE answer_id answer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review CHANGE book_id book_id INT DEFAULT NULL');
    }
}
