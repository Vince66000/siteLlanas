<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200401124334 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE picture');
        $this->addSql('ALTER TABLE artwork ADD pic_height INT NOT NULL, ADD pic_width INT NOT NULL, ADD pic_size LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE picture');
        $this->addSql('ALTER TABLE artwork ADD pic_height INT NOT NULL, ADD pic_width INT NOT NULL, ADD pic_size LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

//        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, artwork_id INT NOT NULL, file_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_16DB4F89DB8FFA4 (artwork_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
//        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89DB8FFA4 FOREIGN KEY (artwork_id) REFERENCES artwork (id)');
//        $this->addSql('ALTER TABLE artwork DROP pic_height, DROP pic_width, DROP pic_size');

}
