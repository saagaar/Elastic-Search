<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220901161328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       
        $this->addSql('CREATE TABLE images_tags (images_id INT NOT NULL, tags_id INT NOT NULL, INDEX IDX_55B2A5D9D44F05E5 (images_id), INDEX IDX_55B2A5D98D7B4FB4 (tags_id), PRIMARY KEY(images_id, tags_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE images_tags ADD CONSTRAINT FK_55B2A5D9D44F05E5 FOREIGN KEY (images_id) REFERENCES images (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE images_tags ADD CONSTRAINT FK_55B2A5D98D7B4FB4 FOREIGN KEY (tags_id) REFERENCES tags (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6AA53A8AA');
        $this->addSql('ALTER TABLE images_tags DROP FOREIGN KEY FK_55B2A5D9D44F05E5');
        $this->addSql('ALTER TABLE images_tags DROP FOREIGN KEY FK_55B2A5D98D7B4FB4');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE images_tags');
    }
}
