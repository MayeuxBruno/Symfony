<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220209133810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AA2513589');
        $this->addSql('DROP INDEX IDX_B3BA5A5AA2513589 ON products');
        $this->addSql('ALTER TABLE products CHANGE supplied_id_id supplied_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A5FAF65CF FOREIGN KEY (supplied_id) REFERENCES suppliers (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A5FAF65CF ON products (supplied_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A5FAF65CF');
        $this->addSql('DROP INDEX IDX_B3BA5A5A5FAF65CF ON products');
        $this->addSql('ALTER TABLE products CHANGE supplied_id supplied_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AA2513589 FOREIGN KEY (supplied_id_id) REFERENCES suppliers (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5AA2513589 ON products (supplied_id_id)');
    }
}
