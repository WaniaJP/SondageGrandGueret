<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313151436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sondage ADD aliment1_id INT NOT NULL, ADD aliment2_id INT NOT NULL, ADD aliment3_id INT NOT NULL, ADD aliment4_id INT NOT NULL, ADD aliment5_id INT NOT NULL, ADD aliment6_id INT NOT NULL, ADD aliment7_id INT NOT NULL, ADD aliment8_id INT NOT NULL, ADD aliment9_id INT NOT NULL, ADD aliment10_id INT NOT NULL, CHANGE date_creation date_creation DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\'');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89FBC9D56FE FOREIGN KEY (aliment1_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89FAE28F910 FOREIGN KEY (aliment2_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F16949E75 FOREIGN KEY (aliment3_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F8B43A6CC FOREIGN KEY (aliment4_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F33FFC1A9 FOREIGN KEY (aliment5_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F214A6E47 FOREIGN KEY (aliment6_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F99F60922 FOREIGN KEY (aliment7_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89FC1951974 FOREIGN KEY (aliment8_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F79297E11 FOREIGN KEY (aliment9_id) REFERENCES aliment (id)');
        $this->addSql('ALTER TABLE sondage ADD CONSTRAINT FK_7579C89F346908BB FOREIGN KEY (aliment10_id) REFERENCES aliment (id)');
        $this->addSql('CREATE INDEX IDX_7579C89FBC9D56FE ON sondage (aliment1_id)');
        $this->addSql('CREATE INDEX IDX_7579C89FAE28F910 ON sondage (aliment2_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F16949E75 ON sondage (aliment3_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F8B43A6CC ON sondage (aliment4_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F33FFC1A9 ON sondage (aliment5_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F214A6E47 ON sondage (aliment6_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F99F60922 ON sondage (aliment7_id)');
        $this->addSql('CREATE INDEX IDX_7579C89FC1951974 ON sondage (aliment8_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F79297E11 ON sondage (aliment9_id)');
        $this->addSql('CREATE INDEX IDX_7579C89F346908BB ON sondage (aliment10_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89FBC9D56FE');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89FAE28F910');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F16949E75');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F8B43A6CC');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F33FFC1A9');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F214A6E47');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F99F60922');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89FC1951974');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F79297E11');
        $this->addSql('ALTER TABLE sondage DROP FOREIGN KEY FK_7579C89F346908BB');
        $this->addSql('DROP INDEX IDX_7579C89FBC9D56FE ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89FAE28F910 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F16949E75 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F8B43A6CC ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F33FFC1A9 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F214A6E47 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F99F60922 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89FC1951974 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F79297E11 ON sondage');
        $this->addSql('DROP INDEX IDX_7579C89F346908BB ON sondage');
        $this->addSql('ALTER TABLE sondage DROP aliment1_id, DROP aliment2_id, DROP aliment3_id, DROP aliment4_id, DROP aliment5_id, DROP aliment6_id, DROP aliment7_id, DROP aliment8_id, DROP aliment9_id, DROP aliment10_id, CHANGE date_creation date_creation DATE NOT NULL');
    }
}
