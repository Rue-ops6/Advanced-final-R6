-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: advanced_final_r6
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catName` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_catname_unique` (`catName`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'&& Sons^','2024-09-22 23:04:20','2024-09-23 00:51:31'),(2,'@Inc.','2024-09-22 23:04:20','2024-09-23 00:51:44'),(3,'PLCs\'','2024-09-22 23:04:20','2024-09-23 00:51:04'),(4,'🔮🦝✨','2024-09-22 23:04:20','2024-09-23 00:50:37'),(5,'Ltd','2024-09-22 23:04:20','2024-09-23 05:21:25'),(6,'࿔‧ ֶָ֢˚˖Q®ue˖˚ֶָ֢ ‧࿔','2024-09-22 23:22:27','2024-09-23 05:21:20'),(7,'˖.🍀.☘︎ ݁˖','2024-09-22 23:23:44','2024-09-23 00:48:01'),(8,'Doe🃏','2024-09-22 23:24:31','2024-09-23 00:49:10');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msgTitle` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Sigrid Brakus','kaylee84@example.com','Digitized nextgeneration model','Similique perferendis iure vitae culpa temporibus ut ipsa doloremque. Incidunt aperiam in quaerat corrupti reiciendis vel veniam reprehenderit. Necessitatibus repudiandae ipsum et deserunt veniam aut nostrum. Omnis ipsam aut voluptatem doloremque. Vitae tempora id rerum tempora. Magnam ad eaque vel officiis. Vel et voluptas dolores vel tempora a. Labore magnam ut atque incidunt. Qui omnis quidem quis facere. Rerum et voluptas modi sequi deserunt iusto quisquam. Optio est deleniti aliquid et et laudantium dolorem. Aut amet vel quia quia qui officiis eius rerum. Molestias sed qui quo dolorem exercitationem doloribus. Labore ea qui a facilis ipsam dolores qui. Aliquid consequuntur ut vitae ex itaque. Debitis accusantium quia quo rerum reiciendis. Officia ut repellendus ad asperiores expedita unde. Voluptate voluptas quia ut placeat rerum nulla. Quia qui ad qui. Ex laborum dolor ut iure in. Voluptatem quod reprehenderit in possimus sit.','0','2024-09-22 23:04:20','2024-09-22 23:04:20'),(2,'Hilton Stokes','klocko.berta@example.org','Adaptive client-driven function','Numquam voluptas perferendis rerum exercitationem et. Et eum cumque fuga nobis laborum esse. Accusamus quasi quia doloremque harum dolores hic tempora veniam. Culpa totam consequatur corrupti eum. Autem iste porro cumque aut eum. Qui accusamus assumenda omnis esse libero. Vitae libero deserunt rerum non architecto sunt. Dolores et vero sunt adipisci deserunt molestiae et. Molestiae magnam odit sint dolorem accusamus ut aspernatur distinctio. Autem eos iusto et soluta. Excepturi recusandae minus non quidem temporibus. Ut consequuntur et illum eum nemo sint dolorum. Officia et et eos vel officiis voluptas perferendis. Cum molestiae at enim assumenda et fugiat repellat nesciunt. Beatae qui velit sit nemo sint rerum sapiente. Ullam repellat asperiores sunt iure id. Quia odio perspiciatis error totam laborum commodi omnis.','1','2024-09-22 23:04:20','2024-09-22 23:04:20'),(3,'Brielle Terry','arnoldo.botsford@example.com','Multi-lateral composite database','Ut architecto ut quia rem sint. Quo voluptatibus natus voluptas possimus sunt sunt. Non magni molestiae sint. Hic et ab minus dolores explicabo. Deleniti repellat quam sequi quod voluptatem quam ullam. Aspernatur voluptatem quaerat rerum modi corrupti dolor. Tenetur et expedita voluptatum cum. Quidem enim mollitia quidem. Nam vel aut commodi. Voluptatem illo repudiandae ullam magni. Omnis consequuntur autem corrupti. Beatae impedit tempora in saepe labore aut ullam. Omnis culpa explicabo nesciunt delectus. Possimus modi et vitae itaque id magnam modi. Exercitationem asperiores id accusantium voluptas enim iure consequatur sunt. Et quisquam voluptatem alias. Et consequatur totam facere ratione iusto aperiam harum.','0','2024-09-22 23:04:20','2024-09-22 23:04:20'),(4,'Dominic Hessel','zdamore@example.com','Advanced client-driven interface','Debitis sunt harum eum. Eligendi assumenda iusto debitis perspiciatis est. Voluptates et fugit non reiciendis incidunt libero sit vero. Eos et ea incidunt occaecati ab. Quia hic necessitatibus deserunt et aperiam dolorem aut. Maiores qui omnis et aperiam. Omnis nulla eveniet inventore repellat ut harum. Rerum sunt exercitationem quidem iure et nisi deleniti. Quia recusandae quo animi velit aspernatur pariatur et totam. Voluptatem voluptatem qui recusandae ab nesciunt minus. Eos autem neque ducimus architecto est. Corporis voluptate nostrum tempore provident. Saepe vel quia accusantium laborum sunt. Nisi cum recusandae autem ducimus quis. Corporis est ea voluptatem qui tempora quisquam ullam ullam. Commodi et necessitatibus fuga ad id fuga eaque. Maiores atque libero autem quo architecto dolorum.','1','2024-09-22 23:04:20','2024-09-22 23:04:20'),(5,'Isabelle Schimmel','lkling@example.net','Focused 24/7 structure','Doloribus iusto ea ut aut. Labore laudantium et non amet aperiam molestiae. Dignissimos et odit natus mollitia ad eaque. Harum incidunt molestiae hic iusto debitis at. Rerum qui magni atque sed molestiae rerum odit. Neque sapiente repellendus accusantium aut et aliquid ab. Quis soluta qui sed nam. Aliquam ea animi voluptatem blanditiis quas. Et dolore commodi eum aut alias molestiae nemo esse. Esse rerum provident deserunt adipisci rerum. Sed occaecati labore aut cumque voluptatibus corrupti quia. Expedita totam nulla dicta enim enim. Qui aliquam itaque quod. Soluta quidem animi beatae tenetur officiis autem alias et. Eaque accusamus totam ut quis nihil hic magnam quia. Rerum sit magni dolor ipsam debitis natus tempore. Pariatur cum incidunt deserunt hic et vitae veritatis.','1','2024-09-22 23:04:20','2024-09-22 23:04:20'),(6,'Celine Rempel','yjacobi@example.org','Enhanced context-sensitive groupware','Nesciunt aut qui molestias totam dolorem necessitatibus alias. Odio officia occaecati minus voluptatem. Possimus praesentium assumenda error sed ut ea. Repellat quam molestiae aliquam quos consequatur. Vitae exercitationem et non qui blanditiis dolore sint tempore. Consequatur voluptas at sed a inventore. Nesciunt voluptas sint architecto beatae. Et voluptas qui cumque consequatur nihil totam sed. Aut voluptatem ut velit ex a repudiandae id voluptatem. Non aliquam accusamus accusantium rerum voluptatum velit. Est velit a voluptatum sit qui aut. Illo ex sunt aperiam non quia at. Quo molestiae nihil et voluptatem libero. Et sequi distinctio sunt praesentium iusto voluptates fugit odio. Sint architecto et maxime aperiam occaecati. In debitis sed voluptatem. Odit incidunt numquam delectus et adipisci id consequatur quia. Voluptatem quis qui itaque aut harum vitae voluptatem eum. Aliquid illo ratione fugiat autem.','0','2024-09-22 23:04:20','2024-09-22 23:04:20'),(7,'Maci Auer','pmcclure@example.com','Exclusive interactive protocol','Animi dolore natus deserunt aliquid quia hic. Aut unde dolor amet dolorem. Sit laboriosam eaque saepe repellendus soluta aut. Error corporis totam id et enim. Debitis quasi culpa quia doloremque. Eveniet fugit voluptas suscipit pariatur. Voluptates sit quia non ea. Excepturi voluptates voluptatibus aut fuga quis debitis eos. Labore consequatur inventore et odit repellendus aut atque. Unde quis similique et rerum non reprehenderit provident. Numquam sint et cumque. Sed et sequi expedita iusto. Ex ex beatae in exercitationem. Et consectetur sunt et soluta velit voluptas iste odit. Minima sit inventore eaque ullam iusto. Aliquam sit sed ratione est atque qui dolorem. Omnis vitae rem quo animi. Sit sit non cum mollitia omnis.','0','2024-09-22 23:04:20','2024-09-22 23:04:20'),(8,'Ms. Guadalupe Feil V','borer.rosalia@example.net','Ergonomic global paradigm','Vel alias aperiam est ex. Ut adipisci velit amet dicta voluptatem. Quod esse deserunt temporibus ratione eligendi alias magni. Magnam pariatur quos culpa consequatur eos omnis. Non similique velit explicabo rerum ipsa tempore. Repellat qui tenetur soluta. Ratione commodi ipsa enim asperiores deleniti est sint. Et nobis exercitationem consectetur quia facilis assumenda. Molestiae magnam ullam et quis sint voluptatibus. Qui est eum eligendi esse tempore. Sint repellendus sequi eum. Sunt ad recusandae molestias. Perferendis similique distinctio explicabo natus rerum eaque quisquam. Saepe consequatur quas minus ipsa. Ex voluptas sint illo velit reiciendis. Libero praesentium inventore ut nihil aliquid ut. Molestiae possimus earum rerum cum nostrum itaque. Porro quia qui et at. Deserunt porro quis mollitia. Eligendi nihil nisi officiis quaerat eos. Nihil distinctio porro qui quae sint.','1','2024-09-22 23:04:20','2024-09-22 23:04:20'),(9,'Kaci Jacobson PhD','koch.tanner@example.net','User-friendly client-server migration','Tempore voluptate neque dolorem sit sit commodi dolores. Laborum modi esse qui. Laudantium est qui libero veritatis. Sint quidem ratione temporibus eveniet et qui iste. Sunt magnam iste amet ut molestiae nostrum sapiente. Sint nemo odit ut voluptatem id ab sed. Eos placeat fugit eius ipsum excepturi commodi. Corrupti consequatur fugiat quo itaque. Earum consectetur consequuntur nihil dolor. Dignissimos dolor expedita doloribus corporis. Voluptate sit et est consectetur eum repellat ut. Id aut natus quos consequuntur nesciunt. Commodi officiis sed quam sequi error eveniet. Suscipit eos accusantium dolorum quia iusto. Esse dignissimos dolor totam minima. Rerum placeat voluptatibus quos quo consequatur pariatur. Non earum veritatis quasi nostrum dolor labore temporibus officia.','1','2024-09-22 23:04:20','2024-09-22 23:04:20'),(10,'Ceasar Kassulke','angus65@example.com','Persevering nextgeneration matrix','Nostrum repellat neque voluptas eaque omnis. Quibusdam consectetur expedita quasi porro ea. Labore tempora non corrupti consectetur aperiam iure. Qui modi ut ab. Doloremque est quibusdam sit quo odit. Perferendis voluptates sint nostrum non sed rerum ea hic. Sint consequatur dolorem voluptas repudiandae molestiae necessitatibus autem aut. Voluptas error architecto et voluptatem et. Molestiae commodi molestiae beatae sit maiores. Quaerat necessitatibus sequi nulla fuga aspernatur. Molestiae quibusdam molestiae est animi. Nihil omnis optio dolore unde eum doloribus commodi. Rerum eum officia delectus est possimus. Autem explicabo velit facere perspiciatis optio voluptate nostrum. Neque voluptatem officia aut expedita nisi. Aut veniam reprehenderit sunt quasi quod.','0','2024-09-22 23:04:20','2024-09-22 23:04:20'),(11,'Trever Wolff','bianka75@example.org','Function-based optimal leverage','Voluptatum et aut neque quo ipsa saepe rem. Quaerat deserunt sit voluptas ut possimus numquam odit. Quibusdam ipsa est nam autem excepturi tenetur. Dolor alias est iusto laboriosam odio. Omnis qui ipsa expedita dicta atque. Nihil non non est. Eius perspiciatis consectetur aut occaecati possimus ab. Aut est dolorem rerum sit. In dolore atque quo harum dignissimos dolores. Sit iste similique aut dolorem aliquam ducimus. Et soluta rerum quidem non. Id quidem assumenda et officiis nesciunt natus accusantium. Impedit magni sed eaque suscipit aut illo. Provident aliquam repellendus vero alias mollitia maxime exercitationem. Pariatur vero voluptas unde ea maxime distinctio vitae. Ut possimus totam in dicta. Ipsa delectus aperiam voluptatibus asperiores. Omnis alias ut corrupti omnis sed qui. Molestiae pariatur rerum eius.','0','2024-09-22 23:20:15','2024-09-22 23:20:15'),(12,'Filiberto Gaylord','lori.howe@example.net','Business-focused demand-driven capability','Deserunt sed aut ipsa omnis voluptatem assumenda suscipit est. Quam iste ipsum eos et. Blanditiis consequatur nemo sint accusantium. Ex qui odit quia doloremque et eos. Illo dolorum eos delectus molestias. Cum sed ratione dicta deserunt necessitatibus aut. Ea sequi est veniam. Est voluptatem quidem ut dignissimos molestiae fugiat. Quibusdam in non sit explicabo. Voluptas officiis ut quidem ducimus unde soluta. Ad ut et nulla quis enim aliquid fugit. Neque vel voluptatibus est molestiae. Sed adipisci dolorem sed quia qui. Eligendi tempora sint qui. Ad numquam laudantium qui sit. Quia quo assumenda omnis reprehenderit.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(13,'Prof. Furman Lebsack DVM','xzavier.moen@example.com','Managed optimizing function','In quis omnis nobis eum nobis numquam non. Eos repudiandae animi perspiciatis molestias distinctio. Harum dolorem est et autem ea eum. Dolorem dolorem quisquam recusandae laboriosam iste. Suscipit ea doloribus aut beatae. Dolore ea possimus id sunt unde dolor est. Velit eos sapiente maxime sint molestias architecto aut. Voluptas error ea facere sapiente accusantium quaerat adipisci. Et ea neque beatae pariatur distinctio mollitia. Delectus iusto magni qui voluptatem impedit. Fugiat sint expedita quis et est tempore. Iure eveniet saepe ducimus omnis ex vel et. Autem eos ex sint cumque. Corporis tempore dicta et tempore officiis ipsa. Fugiat reprehenderit facere atque voluptatibus iusto temporibus. Et neque nam aperiam rem autem mollitia ullam. Autem et dolores ad et iure.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(14,'Randi Pacocha','abe53@example.net','Re-engineered methodical frame','Eos quam voluptas deleniti placeat omnis minus corrupti. Molestias aut magni aut ea necessitatibus iure. Nisi voluptas inventore nemo natus voluptas totam ut. Distinctio assumenda asperiores eos illo at optio. Deserunt facilis sequi necessitatibus eos maxime libero. Ducimus accusamus optio adipisci similique. Atque sed quaerat nostrum. Ab porro voluptates voluptas maxime quis at fuga. Praesentium dicta nobis ut libero exercitationem qui repellendus aspernatur. Impedit vel officia error itaque. Voluptatem non praesentium sit placeat possimus. Ad sit possimus eius eveniet. Dolorem necessitatibus facere doloremque sint velit. Hic in repudiandae et quia nostrum aperiam. Fuga ipsa quis totam cumque quae ut. Voluptates eum odit qui commodi veritatis. Voluptatibus qui soluta amet id minima magni voluptate. Adipisci animi ipsum rerum id. Consectetur ut iste quis consequatur laborum. Sapiente fugit ratione quisquam quasi. Ut et sed doloremque id asperiores.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(15,'Ms. Aniyah Dooley DVM','brando34@example.com','Ergonomic full-range monitoring','Dolorem explicabo harum provident. Impedit ab consectetur vel itaque. Odio corrupti est inventore nihil illo ut ducimus. Esse sit explicabo minus sequi accusantium est. Autem totam ipsa rerum ut commodi quo ipsam fuga. Veritatis et labore tempora. Accusantium magni occaecati molestiae occaecati vitae nisi vero veniam. Est quidem sed sit fugiat incidunt architecto deserunt dolor. Voluptate non tenetur velit dolor delectus iure tempora. Voluptates maiores facilis ut ad. Nihil cum reprehenderit modi voluptas doloremque assumenda asperiores. Labore quo magni quas sint similique voluptates. Magnam dolorem voluptates fuga expedita praesentium dolor. Quod omnis blanditiis aut eaque unde. Vel et ut recusandae animi possimus. Placeat occaecati quis explicabo quaerat. Neque rerum dolorem aut omnis.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(16,'Dolly Rice','kconsidine@example.com','Polarised heuristic flexibility','Qui et consectetur asperiores doloremque et cumque aliquid temporibus. Blanditiis repudiandae voluptate soluta fuga excepturi maxime. Rem sed unde repellat iusto ut architecto. Qui quia eum veritatis cum et. Adipisci quasi iste et dolorem. Omnis consequatur sapiente ut est vel cumque optio. Aut consequatur labore tempore ex. Exercitationem quibusdam reiciendis voluptatibus iure dolorum vel. Provident amet maiores laudantium dignissimos rerum reiciendis alias. Et et earum laborum accusantium dolorem accusantium. Sapiente aliquam itaque repellat sapiente. Magnam sapiente cum aut aut. Deserunt debitis fugit qui ut saepe enim. Ut velit qui est quam voluptatem voluptas laboriosam. Consequuntur adipisci voluptatem veritatis tempora mollitia alias beatae. Velit eaque animi doloribus accusamus explicabo. Consequatur cum sit est nihil aut expedita hic. Possimus voluptas quo atque. Occaecati tenetur voluptatem et facilis tempore. Iure sint perferendis recusandae adipisci dicta consectetur dolores. Ipsum assumenda et non molestiae consequatur quidem aut.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(17,'Mrs. Carmella Mraz','boyle.cade@example.net','Pre-emptive attitude-oriented matrices','Ab nesciunt et velit accusantium. Neque cumque alias mollitia cumque accusamus. Voluptates repellendus aut porro rerum soluta voluptatem illum. Est deleniti qui quidem eum eos. Minima quia in velit eligendi suscipit laborum. Quaerat et incidunt quibusdam a. Et ratione officia optio magni inventore similique aut facilis. Eveniet totam ut amet. Dolorem aut est voluptatem sapiente deleniti. Velit eos commodi minima ut illo. Architecto fugiat dignissimos culpa in. Voluptate eos distinctio doloribus dicta et veritatis. Ut similique sunt qui. Aut rerum at labore. Maxime voluptas architecto delectus. Et ut ea veritatis autem dolore provident necessitatibus dolorem. Voluptatem ab et dolor cumque ex dolore aut.','0','2024-09-22 23:20:15','2024-09-22 23:20:15'),(18,'Fae Shields','shaina49@example.org','Synergistic mission-critical circuit','Sit dolor sed et illum voluptas blanditiis voluptas. Fugiat debitis culpa aut minima neque ut temporibus. Ipsam ea voluptatum mollitia molestiae. Quod officia enim sint ipsum vero minima. Nemo error alias vero. Et et perferendis totam commodi esse occaecati eaque. Ut vel iure consequuntur et quibusdam sed. Sapiente id autem sint ut. Molestias autem blanditiis nobis sit nostrum dolores animi ut. Harum accusamus animi voluptatem commodi hic ea quam. Recusandae veniam enim error eligendi alias qui itaque. At enim officiis maxime delectus laudantium corporis sint. Velit ipsa quia sequi eum ut atque labore. In earum fuga non et impedit. Occaecati reprehenderit odio impedit. Quia praesentium dicta velit et ipsam qui maiores. Et maxime exercitationem suscipit et recusandae quia quasi perspiciatis. Saepe debitis totam autem dignissimos est ab repellendus sed.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(19,'Angie Jacobs','stark.myah@example.net','Quality-focused cohesive openarchitecture','Rerum mollitia optio delectus harum. Nemo molestias reiciendis numquam hic eveniet totam. Eaque hic quae exercitationem et. Voluptatibus illum dolor commodi quod nobis et eligendi. Quasi necessitatibus vel molestias rem. Numquam aut ut consectetur optio dolores. Sed et dignissimos maxime delectus sit omnis enim. Fugit non ducimus laborum nemo doloremque minus. Eos maxime omnis laboriosam veritatis alias et quis. Et similique omnis reiciendis ut aut optio. Pariatur et autem odit eaque expedita laudantium. Molestiae ut ea reiciendis placeat aut quis magnam explicabo. Voluptatem fuga sit adipisci autem. Ea omnis aut quo sunt nisi molestiae. Amet distinctio repellat sed debitis ex rerum. Eum blanditiis harum et sunt. Ratione qui quia numquam debitis corrupti soluta.','1','2024-09-22 23:20:15','2024-09-22 23:20:15'),(20,'Kip Gulgowski','ublanda@example.com','Compatible tertiary complexity','Aut occaecati sint et quisquam. Illum deserunt qui quia sint a aliquam in. Voluptas et soluta autem repudiandae autem est. Consequatur dolores sint sint id. Et quia ea temporibus repellendus. Autem quaerat debitis cumque. Reprehenderit qui porro id amet. Sit explicabo sapiente iure. Ut consequatur cumque id error ut rerum. Quia ex ut cum voluptatibus impedit earum. Amet provident quas debitis tempore. Sint est atque voluptas aut ut repellat quis. Qui dolorum molestiae incidunt ut omnis quae facere. Iste nihil quas quia facilis. Qui quas sequi sint aut autem quia. Eveniet explicabo consequatur rem voluptates magnam eveniet impedit. Corporis incidunt harum velit.','0','2024-09-22 23:20:15','2024-09-22 23:20:15'),(21,'z','z@z','zz','zzz','0','2024-09-23 06:18:26','2024-09-23 06:18:26');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_09_07_014638_create_testimonials_table',1),(5,'2024_09_07_014727_create_categories_table',1),(6,'2024_09_07_014741_create_topics_table',1),(7,'2024_09_15_221317_create_personal_access_tokens_table',1),(8,'2024_09_20_161022_create_contacts_table',1),(9,'0001_01_01_000000_create_users_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('HtoxBGwM0ZHBWPTvNpnC0oyWZLjidz4wWlD7LR9o',21,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:130.0) Gecko/20100101 Firefox/130.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkxvTUdpdmV3cWZsblI5MUlOYTQzN2xZNTM5eGRYU0hVUnVqVGFZRiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZXNzYWdlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1727141628);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Jane_Doe','Minima id sit voluptates quae. Excepturi consequatur ut necessitatibus alias nisi aliquid id eveniet. Tempora eveniet repellat consectetur corporis nesciunt nam qui.',1,'1727137801.jpeg','2024-09-22 23:04:20','2024-09-23 21:30:01'),(2,'Emily','Rem delectus voluptatem id fugiat est. Quia est officia quis at qui. Debitis totam at sunt dolore.',0,'janis-dzenis-oPRubjbiqKI-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(3,'Kurtis','Hic fugiat maiores culpa dicta quo laboriosam delectus. Quae nemo reprehenderit sed dolore. Aspernatur in ab enim rem omnis.',1,'rocky-xiong-UE04nFCgDUE-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(4,'Jane_Doe','Eaque ea inventore odio quas et. Similique inventore dolorem sed. Delectus numquam dicta minima eum. Sit modi voluptas et ut non. Cupiditate quibusdam quam magnam minus vel deleniti.',0,'janis-dzenis-oPRubjbiqKI-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(5,'Jane_Doe','Illo aut voluptatem voluptatem explicabo. Eos aut cumque omnis maiores qui vel iusto. Aut commodi et quis voluptas eveniet consequuntur.',0,'rocky-xiong-UE04nFCgDUE-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(6,'Jane_Doe','Qui iure voluptatem voluptas velit in repudiandae. Soluta ipsum sit non sint repellendus. Sint autem voluptas ipsum eum et.',0,'janis-dzenis-oPRubjbiqKI-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(7,'Kurtis','Rem ullam ducimus quam quo. Aut recusandae beatae voluptas et sapiente nemo voluptatibus. Numquam excepturi sed accusantium saepe totam aperiam.',1,'rocky-xiong-UE04nFCgDUE-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(8,'John-Doe','Inventore adipisci qui id. Dolores quo quo aut voluptates veritatis atque. Voluptatem assumenda eligendi saepe non dolores ut. Repellendus illum dolor quaerat culpa incidunt recusandae ea.',1,'1727137869.png','2024-09-22 23:04:20','2024-09-23 21:31:09'),(9,'Johnathan','Doloremque quis itaque architecto voluptatem. Minima dolor accusantium itaque velit.',0,'janis-dzenis-oPRubjbiqKI-unsplash.jpg','2024-09-22 23:04:20','2024-09-22 23:04:20'),(10,'Jane_Doe','Nostrum tempora molestias aut non aut voluptate est. Exercitationem et provident sit eos. Qui omnis officia qui molestiae cum et dolorum',1,'1727138555.jpeg','2024-09-22 23:04:20','2024-09-23 21:42:35'),(11,'Johnathan','Rerum autem sint non sint perspiciatis libero blanditiis. Consequatur voluptatem fuga corporis numquam. Vel dolorum impedit id velit aut quidem.',0,'rocky-xiong-UE04nFCgDUE-unsplash.jpg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(12,'Emily','Magnam eos harum non rem minima. Sit eos facere eaque eius corporis ab qui. Eum a natus iste reprehenderit quidem doloribus voluptatibus. Est in dolore rerum autem. Voluptatibus ea ea aperiam.',0,'main-qimg-87e3205e0d60ac269cb27d4134703bfe-lq.jpeg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(13,'Kurtis','Reiciendis et itaque repellendus nemo ipsa pariatur. Libero necessitatibus eum et sed. Ducimus sit nisi aut in aut dolor cumque necessitatibus.',0,'1727137770.png','2024-09-22 23:20:15','2024-09-23 21:29:30'),(14,'John-Doe','Distinctio in non aut quia id optio. Aspernatur voluptate cumque aut tempora dignissimos. Qui quo hic et iste debitis rerum. Consequatur est magnam aut odio exped',1,'7_types_of_employee_testimonials_to_attract_the_best_candidates.png','2024-09-22 23:20:15','2024-09-23 22:09:42'),(15,'Johnathan','Aut et natus veniam sit maiores tempore earum. Quaerat architecto adipisci expedita dolores veritatis. Tenetur ipsum recusandae nobis qui eius.',1,'main-qimg-87e3205e0d60ac269cb27d4134703bfe-lq.jpeg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(16,'Jane_Doe','Porro itaque blanditiis adipisci. Sint quibusdam dolores repellat dignissimos. Ipsa rem dolorem sit quia rerum doloribus.',0,'main-qimg-87e3205e0d60ac269cb27d4134703bfe-lq.jpeg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(17,'Emily','Nostrum libero rerum molestias ut. Ipsam quo qui ut non. Inventore labore sit nostrum aspernatur perferendis. Veniam odit vitae nihil omnis omnis et quisquam.',0,'asian-beauty-women-model-photo.jpg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(18,'Jane_Doe','Tempore rerum unde aut hic odio ut. Perferendis necessitatibus voluptates corrupti accusantium magni. Illo illo quia qui non quisquam.',0,'janis-dzenis-oPRubjbiqKI-unsplash.jpg','2024-09-22 23:20:15','2024-09-22 23:20:15'),(19,'Jane_Doe','Soluta et deserunt dicta qui omnis dignissimos dolorem. Facere quo magnam aut dolor quasi quia. Voluptatibus sequi assumenda incidunt minus.',0,'1727138457.jpeg','2024-09-22 23:20:15','2024-09-23 21:40:57'),(20,'Jane_Doe','Voluptatum rerum veniam aliquid molestiae dolor. Et ut sed quis nihil assumenda aliquam. Commodi iure qui quos qu',1,'1727140126.jpeg','2024-09-22 23:20:15','2024-09-23 22:09:06'),(21,'Gilbert_Blythe','Anne w/an E',1,'1727137151.png','2024-09-23 21:19:11','2024-09-23 22:08:16');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `topicTitle` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `catID` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topics_catid_foreign` (`catID`),
  CONSTRAINT `topics_catid_foreign` FOREIGN KEY (`catID`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (12,'Methodology','Ipsum nesciunt enim repudiandae repellendus. Recusandae doloribus mollitia ratione corporis ad aliquam. Dolore sequi neque accusamus quod libero voluptatem. Quam deleniti ab beatae ipsa. Doloremque eos eos aperiam molestiae beatae aliquam. Est omnis laborum distinctio tempora assumenda hic et. Nesciunt voluptas minima labore aperiam vel officiis. Tempora sunt possimus alias consequatur. Omnis mollitia adipisci sit quia ex unde. Totam quia quos eaque sed. Delectus minus ea et a eum molestiae. Autem sequi delectus ducimus omnis dolorem odio sed. Quis maiores voluptatem cupiditate occaecati. Id cumque iusto id repellat. Voluptatem voluptatem commodi porro nihil. Voluptas modi rerum et pariatur unde quo. Debitis quibusdam soluta qui natus quisquam illo veniam. Consequatur impedit occaecati eius est ab.',1,4,'undraw_Remote_design_team_re_urdx.png',7,'2024-09-22 23:20:15','2024-09-22 23:28:25'),(13,'Dark Heritage','Impedit velit nemo ut minima. Dolorum quod molestiae temporibus aliquid maiores numquam iste. Et nihil saepe omnis tempora perferendis. Fugiat qui facilis dignissimos minima similique ad. Est iusto qui omnis. Assumenda temporibus enim impedit ex et doloribus qui sapiente. Voluptas debitis mollitia numquam molestiae quisquam. Sint iure corrupti aut in odit. Quia ut sit enim vel omnis. Sit labore animi voluptates distinctio consectetur alias. Ipsum possimus itaque in beatae commodi voluptas unde. Eaque vero nihil fuga sit accusamus quia. Eligendi odio perferendis sed voluptatum. Et et officiis qui nihil optio. Qui occaecati modi neque esse deserunt excepturi culpa. Eum facilis nihil ea fugit.',1,3,'undraw_Redesign_feedback_re_jvm0.png',4,'2024-09-22 23:20:15','2024-09-22 23:20:15'),(14,'Intangible crafts','Impedit error ipsa quia voluptates illo dolore laudantium. Quam nam corrupti sit placeat beatae. Nostrum et perferendis neque. Modi voluptatem magni autem aut excepturi eum voluptatum architecto. Aspernatur ipsam quidem laboriosam repellat. Ipsa maiores qui fugit ullam sunt similique maiores. Ex libero ipsam deserunt. Exercitationem perspiciatis earum laboriosam et a dignissimos. Culpa quis quia et est debitis similique. Velit ullam est ut consequuntur quod alias quis. Amet commodi omnis quo ut exercitationem ullam aliquid. Reprehenderit hic dolorum consequuntur voluptas beatae voluptas. Maxime saepe quaerat facere ut. Et veritatis provident ea ut. Assumenda deleniti qui nam sed atque quod est rerum. Quia officiis debitis veritatis quis. Voluptatem doloribus sapiente repellendus nulla. Nihil voluptatibus qui quo accusamus rerum perspiciatis. Nisi cupiditate recusandae laudantium et cupiditate nisi.',1,14,'undraw_viral_tweet_gndb.png',6,'2024-09-22 23:20:15','2024-09-22 23:28:45'),(15,'Intangible crafts','Nesciunt id atque mollitia dignissimos. Culpa voluptatum ut dicta accusantium aliquid natus dolores. Facere et aut enim incidunt numquam. Fuga dolor neque voluptas consectetur. Est sit assumenda in accusamus ullam perferendis. Quasi ut quia eligendi culpa nulla. Omnis quae eum vel sed quia voluptas perferendis. Vel nihil velit eos itaque nisi in rerum. Tempora soluta ex aut. Perferendis aut ut atque et voluptatem. Quis non nobis dolorum rem eius. In voluptas voluptatem cum itaque quisquam. Quam aspernatur id asperiores aut neque soluta omnis. Ut quis harum pariatur. Delectus modi sunt accusantium. Repellat ut nam iste ullam. Voluptatum dolores nobis facere sint cum. Est sequi perferendis quo ullam. Ea officiis pariatur enim nulla sit sunt.',1,18,'undraw_Graduation_re_gthn.png',3,'2024-09-22 23:20:15','2024-09-22 23:20:15'),(16,'UCH','At pariatur corrupti nostrum quis iusto dolorem nulla. Ipsum eaque sunt id adipisci voluptatem saepe. Laborum nesciunt consequatur ut repudiandae et optio. Velit fuga sint est fugit aperiam nihil reprehenderit cum. Eligendi vel possimus adipisci dolor. Incidunt consequatur quia adipisci tenetur omnis corrupti suscipit. Consequatur perspiciatis quos quis pariatur est quis ut. Molestiae doloribus aut officia ut ipsa. Explicabo nesciunt natus nulla. Iusto non velit odio. Provident ex ipsa autem ut. Debitis excepturi itaque perspiciatis sit. Odit doloribus accusantium dolorem soluta consequatur pariatur quam. Voluptas nemo mollitia tempore dolorum numquam aut. Debitis suscipit ut ducimus veniam harum eius quisquam fuga. Repellat nihil quia eos ipsam molestiae nulla.',1,11,'undraw_Finance_re_gnv2.png',6,'2024-09-22 23:20:15','2024-09-22 23:29:02'),(17,'UCH','Incidunt voluptate ut et. Velit recusandae in illo. Natus est voluptatem ducimus autem necessitatibus rem neque. Doloribus sit aut doloremque ut et. Quia ipsa reiciendis corporis eos cumque consectetur nulla. Sequi vitae tempore veritatis. Facilis quas iusto praesentium. Rerum et dolorem delectus eius reiciendis aut est. Sed non id voluptatem impedit. Sed natus sit expedita molestiae dolore a aut officiis. Possimus rerum ipsam quis dolor ab itaque. Aut sit recusandae molestiae voluptatem debitis. Labore ut explicabo sunt ullam. Sit laborum itaque et beatae illum optio. Est unde dolorem quaerat omnis occaecati quasi qui. Tenetur laborum beatae incidunt ipsum eligendi fugiat qui. Et doloremque consectetur reprehenderit perferendis eius. Nihil aut cupiditate quas eius aut quia aut.',0,4,'undraw_Compose_music_re_wpiw.png',1,'2024-09-22 23:20:15','2024-09-22 23:20:15'),(18,'underdogs|storries','Quis ullam pariatur sequi iste eligendi. Distinctio saepe culpa id nam suscipit facilis eum. Est exercitationem omnis alias non. Deleniti delectus quo et sed quia est rerum. Voluptate culpa aut amet mollitia quibusdam. Possimus et eius molestiae consequatur quia sunt. Earum natus sed adipisci dolore cum. Illum ex impedit fuga rerum molestiae. Aliquid dignissimos voluptatem ipsum ut earum dolorem libero. Molestiae adipisci quo magni reprehenderit odit corrupti blanditiis a. Maxime hic exercitationem minima harum vel error aut soluta. Vel laudantium officiis quo quo voluptatem odio aliquam qui. Ab provident deleniti nemo provident reprehenderit omnis. Quae nihil in aliquam vel sunt. Consectetur earum dolorem et tenetur suscipit veritatis facere. Ipsam laborum vel quidem id aut.',1,22,'undraw_Group_video_re_btu7.png',8,'2024-09-22 23:20:15','2024-09-23 18:25:39'),(19,'Methodology','Velit architecto temporibus maxime officia vero dignissimos tempora. Excepturi ab nulla consequatur amet. Vero dolorum id nobis officia. Omnis voluptate quidem quos et et aperiam neque. Cumque aut ea rerum dolorem eligendi dolores accusamus. Illo enim ducimus eos sint ut. Quia dolor odit harum id. Aut ea molestiae atque harum molestiae totam. Nobis natus eum est quia voluptas. Recusandae eos alias eos debitis aliquid et perferendis. Et quis nemo quo est. Et pariatur quia sit consectetur nesciunt ut. Atque quo sequi quae illum asperiores. Alias distinctio nulla quo voluptatem illo. Dolore iste quo dolor sed sint vero harum. Non ducimus quam autem voluptatem quibusdam eum. Quia omnis ratione sed sapiente. Cumque omnis asperiores sapiente incidunt aut id nesciunt. Voluptas ad natus dolorem magni impedit vel iste incidunt.',1,18,'undraw_Graduation_re_gthn.png',3,'2024-09-22 23:20:15','2024-09-22 23:20:15'),(20,'underdogs|storries','Repellat voluptatem est molestias saepe. Vel iusto fugiat et sunt aut voluptas. Dolorem velit veniam aliquid quia. Eius architecto ut recusandae deserunt soluta sit. Sit nemo nesciunt nesciunt aut explicabo eum voluptas. Nihil minima iusto corrupti porro non vel velit. Delectus fugiat occaecati voluptate. Cupiditate nemo magni natus similique est consequatur vitae. Voluptatem molestiae corrupti non ut qui. Culpa sed quidem exercitationem rem facere. Ducimus placeat aut saepe. Itaque et saepe corporis. Debitis quia ut dolore enim quidem dolor. Exercitationem est iure odio laudantium. Ut possimus totam dolore suscipit iste aut quo minima. Debitis rerum odit facilis iure officia beatae. Molestiae ex voluptas voluptas maiores ea eveniet qui. Natus nisi minus explicabo iusto nam neque aut. Et incidunt voluptas ut quaerat saepe.',1,28,'undraw_Graduation_re_gthn.png',6,'2024-09-22 23:20:15','2024-09-22 23:29:55'),(21,'Methodology','Ab distinctio recusandae et qui ab. Et placeat totam enim earum sunt porro et qui. A quae consequuntur omnis quod amet et quas. Temporibus asperiores porro a accusamus aut. Autem et nulla recusandae temporibus. Voluptate eius velit accusamus ut dolor. Minus qui a soluta quos. Aperiam ullam vero sed omnis nesciunt. Vel placeat aut sequi reiciendis. Sed ut non libero minus dolorum voluptatum ut. Animi sint a numquam odit aspernatur quia. Aut nobis dignissimos libero laudantium dolor. Error sed labore non non velit. Repellendus velit aliquam tempora et iure eveniet.',0,3,'undraw_Redesign_feedback_re_jvm0.png',1,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(22,'UCH','Ut consequatur neque quia magni eos laborum provident. Blanditiis in quod laborum laudantium soluta. Rerum nostrum pariatur commodi. Delectus a sint est odio. Minima tempore qui consequatur voluptates. Exercitationem porro ex natus vitae ipsum est quas. Tempore illum sit quisquam consequatur qui. Eius quo ut est rerum explicabo pariatur sunt. Enim non temporibus vitae illum cum distinctio. Omnis suscipit totam eum. Veritatis facilis nesciunt nam laboriosam similique est in. Reprehenderit quis sunt similique molestiae aut et libero. Et non quia est ducimus illum quia et. Quia qui repellat asperiores tempore voluptatum nesciunt nesciunt. Repudiandae aliquam adipisci voluptatum. Soluta repellendus quod pariatur aliquam numquam. Tempora qui ex non. Corporis quo blanditiis ad animi maxime labore.',1,9,'undraw_happy_music_g6wc.png',3,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(23,'Intangible crafts','Ipsa hic mollitia atque minus alias incidunt. Reprehenderit repellat reiciendis earum consequatur architecto sapiente atque. Omnis accusamus quibusdam ut ullam nesciunt ullam cumque. Libero deleniti a voluptas culpa et odit. Sint facilis vero nesciunt minima. Earum dolorem odio ut. Consequuntur reprehenderit sed illo perferendis amet praesentium. Officiis et totam nulla dicta rerum. Eos et nemo eaque dolores. Facere eos sunt earum aspernatur expedita itaque aliquam. Exercitationem facere velit est officiis repellendus esse. Reiciendis et sunt hic ut aliquid ut voluptas. Provident non numquam dolores ea in et vitae. Blanditiis ex asperiores et. Omnis ut quae consequatur corporis dolorem et dolore ab. Explicabo doloribus id adipisci qui voluptas est repellendus omnis.',1,13,'undraw_Compose_music_re_wpiw.png',7,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(24,'Queendom','Voluptates adipisci ea tempore eligendi non facilis. Porro accusantium totam dignissimos cupiditate ut earum est. Quod facilis dolores consectetur distinctio similique sit. Doloribus est nihil possimus quod et et consequatur qui. Numquam rem quas neque aliquam et. Perferendis aspernatur et perspiciatis maxime natus molestiae. Accusamus illo aliquam et sint blanditiis voluptatem adipisci. Et molestias animi rerum sapiente eos possimus necessitatibus rem. Autem rerum inventore deserunt voluptatibus sunt. Ut qui rerum autem aut. Id debitis assumenda deserunt voluptatem corrupti consequuntur. Dicta quaerat alias numquam dignissimos ullam adipisci dolore. Sit voluptas rerum provident enim modi doloremque eos. Magni optio corrupti deleniti consequuntur. Sed eligendi soluta iure delectus odio ut. Ipsa voluptas debitis cupiditate quia fugiat minus ipsum. Aut eligendi optio sint perspiciatis. Ipsa pariatur dolorem et sint voluptatem.',1,4,'undraw_Podcast_audience_re_4i5q.png',4,'2024-09-22 23:24:56','2024-09-23 18:25:09'),(25,'Queendom','Nam minima repellendus consectetur illo. Deserunt sunt nam id maxime sed eveniet omnis. Quae totam blanditiis neque magnam. Quo voluptates alias magni est. Quia odio ullam quod nihil amet maxime culpa. Explicabo atque molestiae incidunt. Dolorem voluptatem facilis eligendi beatae voluptate voluptatem praesentium. Eum laudantium maiores atque adipisci. Unde id natus deserunt quis architecto eum enim. Dolor et est aut nesciunt vel. Repellendus provident placeat sit necessitatibus. Unde veritatis sequi voluptatibus. Sed ipsum blanditiis eum voluptatem officiis quam eius. Rerum unde eum atque unde non voluptatum nulla. Dolores temporibus ipsum ea ut animi saepe. Amet at voluptatum vitae sit rerum est. Qui quia qui ullam laboriosam qui. Qui repudiandae ea porro eos iste. Voluptatem sed quo est qui voluptatem dolor autem quia.',0,56,'undraw_viral_tweet_gndb.png',7,'2024-09-22 23:24:56','2024-09-23 01:16:53'),(26,'Dark Heritage','Deserunt dolor voluptatem nemo qui voluptatibus. Sit reiciendis omnis et delectus repellendus aut aut. Eveniet tempora repellat nam. Molestiae suscipit saepe iste nisi architecto ea id quisquam. Officiis dolorum iste odio ipsam et ex. Dolores earum molestias dolor doloribus. Illo similique eos dolor. Sint explicabo facere eveniet nulla. Nostrum distinctio et minus sit quos aspernatur. Ratione iusto numquam et nihil dolor dolores occaecati qui. Excepturi dicta pariatur incidunt et qui totam. Quis ducimus ratione dignissimos maiores. Suscipit fuga officiis iste consequatur ex. Aliquid sunt quibusdam ullam debitis molestiae. Minima labore mollitia quos officia deserunt sequi aut illo.',1,28,'undraw_Redesign_feedback_re_jvm0.png',6,'2024-09-22 23:24:56','2024-09-22 23:29:28'),(27,'Intangible crafts','Voluptas dolor quia repellat. Occaecati porro quia distinctio vel. Vitae consequatur excepturi tenetur magni quibusdam quod maiores. Porro doloribus qui laboriosam est aut distinctio. Eum aut quia dolorum ex velit dicta. Distinctio mollitia excepturi exercitationem. Perferendis aut veritatis debitis iste unde consequatur. Quaerat et et consequatur sit ut. In et voluptate ipsa aut minus omnis. Sint architecto ex laborum qui consequuntur sit aut. Pariatur doloribus ullam facilis quis velit rem aliquid. Sequi aut ullam et nemo hic repellat. Iure quis labore ut nam animi nobis. Inventore mollitia ratione tempora vero nemo dicta est voluptas. Optio consequatur deleniti neque dolorum aliquid nostrum eum.',0,10,'undraw_Educator_re_ju47.png',4,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(28,'underdogs|storries','Quia laborum aut maiores voluptas necessitatibus. Quo architecto modi voluptatem est nihil quia iusto. Et ut nobis possimus consequatur accusamus. Sed nihil est est quia et quia ut nulla. Eius et distinctio cumque rerum. Quae autem nostrum voluptatibus id ut accusantium dolore. Officiis et ratione quaerat quas ut iusto aut neque. Modi non fugit quia ea a. Sed alias magni molestias doloribus impedit velit veritatis aut. Doloremque deserunt praesentium omnis odio suscipit rerum sed. Numquam dolorum ipsam quae et ut qui. Incidunt perferendis magnam voluptate. In voluptatem et vitae fugit qui. A quidem illum eum officia voluptatibus minima sit. Eum sit omnis ipsam fugit et. Hic laborum vitae dolor beatae. Debitis soluta quisquam magni eveniet a magni impedit ratione. Nam perspiciatis similique aut beatae magnam.',1,53,'undraw_Redesign_feedback_re_jvm0.png',7,'2024-09-22 23:24:56','2024-09-23 18:22:14'),(29,'Dark Heritage','Ipsam cupiditate omnis quia suscipit eos ducimus rerum. Consectetur vel architecto voluptas omnis facere ipsum quia. Cum fugit labore voluptates eum. Iure quis occaecati odio illum. Eligendi inventore dicta numquam est corrupti quibusdam voluptatibus. Reiciendis eos nam nisi non occaecati provident enim sed. Et dolor laudantium quos vero ad. Voluptatum voluptatem iure omnis distinctio adipisci ipsum quis. Quia et accusantium rerum eos quibusdam qui aspernatur. Maiores cupiditate facilis suscipit. Aut quae molestiae rerum sequi voluptas culpa. Aut repudiandae excepturi iste eos asperiores. Aut veritatis esse vel eius. Nulla eos tempora aut aliquam vero harum. Minima sed consequatur non fugiat est. Fugiat aut ipsum pariatur rerum debitis ut natus eligendi. Quis dolor enim ipsa. Et voluptas sunt architecto voluptas. Ea quam dolorem quo voluptate ut omnis.',1,5,'undraw_Remote_design_team_re_urdx.png',7,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(30,'Queendom','Vel perspiciatis ullam blanditiis. Laudantium aliquam incidunt laborum vitae quis repudiandae. Voluptatem ea ipsum autem qui facere. Consectetur placeat aut quod error rerum expedita. Ea nihil et quam rem ut labore aspernatur. Quasi dicta culpa aut doloremque deserunt fugiat ex. Et qui possimus voluptas itaque eum qui sit placeat. Quia sint est exercitationem molestias ipsam. Sed soluta iusto corrupti impedit. Aspernatur numquam nam facere aut et dolorem. Maiores laboriosam et nemo. Omnis et rem dolores consectetur sit. Vel amet cumque consequuntur velit ut in. Omnis voluptas et magnam saepe adipisci inventore laudantium et. Occaecati exercitationem enim officiis. Sed repellendus ut est fuga.',0,2,'undraw_Group_video_re_btu7.png',3,'2024-09-22 23:24:56','2024-09-22 23:24:56'),(31,'UCH','At sed aut facilis cupiditate quia. Ipsa ut enim veritatis fuga dolorem. Non maiores et nisi quaerat aliquam impedit qui. Dolores deserunt quia quia minima eaque debitis voluptas eaque. Quis ea blanditiis iusto consequatur optio ut vitae earum. Qui harum consequatur tempore animi id quasi porro velit. Labore omnis architecto occaecati. Et nesciunt temporibus debitis. Quia id voluptates voluptatem. Sit tempore quae odit omnis. Placeat maxime dolores nobis sit illo enim. In consectetur facere sed explicabo ut aut. Ut accusantium sunt id soluta. Voluptatem similique dolore molestiae ut cum est eligendi. Quaerat et saepe pariatur voluptas est natus sint atque.',1,1,'undraw_Compose_music_re_wpiw.png',7,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(32,'underdogs|storries','Minus architecto quos ab iure eum quae ea nihil. Ullam quia recusandae expedita nulla sequi molestiae. Eum in tenetur molestias nostrum. Est placeat deserunt placeat sint. Id asperiores voluptatibus ut fugit aut rem quo tempore. Excepturi qui eum eum ipsa voluptates neque adipisci. Harum aliquam molestiae architecto sit tempore consequatur. Architecto nobis laboriosam quis unde sed corporis aut. Illum dolorum voluptatem voluptatibus assumenda quis. Voluptas pariatur non reprehenderit enim. Deserunt est velit nemo et hic. Aperiam molestiae quibusdam blanditiis ullam rerum alias dolor temporibus. Illo excepturi delectus nihil error ea veniam eos. Nobis repellendus eos blanditiis repellat veniam qui ab distinctio. Laudantium ut molestias veniam odio non omnis adipisci. Cumque sed saepe molestiae molestiae voluptatibus. Et necessitatibus commodi vel ab ipsa qui. Soluta quod eos in inventore soluta possimus incidunt. Alias ut nihil doloremque porro quia modi voluptates.',1,16,'undraw_Graduation_re_gthn.png',3,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(33,'Methodology','Provident fugiat consequatur maiores officiis voluptas consectetur sit. Eos quia ab minima rerum omnis. Dolores aliquam perspiciatis molestiae fuga ullam optio ullam. Deleniti ab incidunt ut est beatae aspernatur. Veniam quos dolore voluptates et. Velit porro nobis hic est distinctio. Et necessitatibus dolor animi aliquam consequatur. Expedita et aliquam aspernatur rerum. Accusantium deleniti soluta et iste harum vel. Qui ut et illum sint voluptas saepe sint similique. Blanditiis et dolores et qui sit. Dolorum nam rem voluptas. Autem dolorem omnis sequi. Non tenetur dolor aliquid nesciunt sint. Esse est repellat minima placeat quibusdam iure deserunt.',1,17,'undraw_happy_music_g6wc.png',5,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(34,'Queendom','Ab alias quia magnam at. Voluptatem earum iste recusandae. Rerum aspernatur aut omnis nesciunt ratione debitis. Quo accusantium voluptatibus pariatur beatae ut. Eos enim voluptas atque amet nulla. Qui laboriosam unde est. Molestias quibusdam beatae ab sunt ut dolore. Itaque veniam et adipisci ut eligendi blanditiis. Et dolorem officia occaecati voluptate numquam. Est ea iste rerum nihil eos numquam et. Nulla aspernatur aperiam omnis aut rem porro. Fugit est sequi ipsa aut iure et occaecati velit. Nihil vero ut id. Sequi eum sapiente laborum enim id officia quia doloribus. Aut nobis et et modi non assumenda. Sequi dolores in doloremque sed sapiente. Amet repellendus at ipsum molestias. Libero recusandae iusto ipsa est accusantium. Maxime error deleniti earum.',1,16,'undraw_Podcast_audience_re_4i5q.png',7,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(35,'Dark Heritage','Voluptate repellendus impedit ut exercitationem. Aut enim quibusdam illum est est ducimus id id. Nihil sunt quibusdam doloremque similique pariatur inventore molestias. Et quia est sunt et voluptatem atque. Reiciendis aut est vero in. Iusto non placeat laboriosam consequuntur magnam atque rerum. Culpa earum et qui ullam. Sit corporis quos cupiditate explicabo in corrupti. Perferendis sunt autem ducimus et. Recusandae sed minima sapiente saepe ducimus et quo. Odit sed pariatur amet vel culpa. Sed incidunt rerum ducimus et odio occaecati dolorum accusamus. Modi error dolorem autem quis eum. Debitis sit et autem. Eos voluptatem enim dolore. Sed illum et molestiae qui provident harum. Sequi natus ipsam illum. Nulla est commodi quia voluptas perferendis ut aut. Dolorum voluptates consequatur aut voluptatum explicabo. Rerum aut corrupti facilis eveniet velit est occaecati. Sapiente laboriosam occaecati praesentium quas consequuntur dolor.',1,6,'undraw_Graduation_re_gthn.png',3,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(36,'Methodology','Facilis voluptatum iste voluptas maxime. Occaecati ea est at temporibus sed accusantium et. Ad rerum ut accusantium corporis omnis sit consequatur. Et reiciendis cum delectus doloremque mollitia et et. Reiciendis facilis voluptatem beatae eum consequatur qui. Consequatur doloremque ut molestias voluptas repellat sit. Quaerat qui vitae placeat rerum perspiciatis omnis sunt. Quae magni reiciendis ea minus nobis consequuntur dignissimos. Quia et sequi magnam. Deleniti assumenda fugit aut qui voluptatem consequatur autem. Corrupti quia doloremque porro id doloremque voluptas facere. Dolor vel quod adipisci. Ea soluta et sequi vitae nobis est ea. Omnis vel sint rem id odio. Est nihil tenetur quo unde. Quia repudiandae suscipit corporis dolores. Cumque sit aut et impedit dicta.',0,18,'undraw_Finance_re_gnv2.png',2,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(37,'Methodology','Incidunt voluptatum ut voluptatibus facere dicta. Aut ut omnis minima consectetur. Quo id sit dolorem ullam deleniti qui ipsum consequatur. Expedita inventore sequi quae quis quo nobis sit. Similique voluptatum iure natus enim. Esse incidunt eos ut consequatur voluptas mollitia. Qui et fugit vel non repellendus id consequatur. Commodi ducimus dolorem nam iste vel. Atque et voluptatem labore hic. Sed ut eum libero error inventore praesentium molestiae. Corporis repudiandae odit atque est aut pariatur dolor sit. Dolor harum enim est illum. Autem natus quo hic expedita maiores. Eligendi molestias laboriosam et aspernatur non quos. Animi beatae omnis maiores praesentium esse ipsa.',1,5,'undraw_viral_tweet_gndb.png',2,'2024-09-22 23:25:40','2024-09-23 05:18:40'),(38,'UCH','Ut qui nulla doloremque expedita facilis ut quia. Nobis nulla et est doloremque aspernatur laboriosam voluptatem culpa. Placeat suscipit delectus nam quo aut blanditiis. Perferendis sint quia fugiat totam doloribus et tempore. Totam totam doloremque ducimus perspiciatis modi aut ullam. Rerum est quis natus. Possimus ea sint et. Minima voluptates dolorem tempore odit iste. Quis consectetur voluptatibus magnam et aliquam facilis beatae. Numquam velit nobis ut quasi at. Ab sunt natus voluptatibus unde quas. Dolorem optio dolore asperiores est quis. Assumenda corrupti tempora voluptatibus. Dolores et dolorem velit vel omnis earum natus. Veniam ut ipsam laborum consequuntur dignissimos unde ipsa. Tenetur rem dolor amet voluptates molestias qui. Magnam ratione doloremque et sunt provident ut.',1,5,'undraw_happy_music_g6wc.png',5,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(39,'Methodology','Quis sunt laudantium animi non minima vel pariatur. Debitis error vitae architecto qui. Eos consequuntur est eum numquam commodi. Ad at dolor dolorem et cupiditate totam. Sint enim nisi eius voluptates quasi pariatur repellendus. Voluptatem voluptates amet eius non. Qui delectus sed delectus fugiat sint ut. Velit fugit at quo nisi dolorem voluptatem esse optio. Consequatur esse fuga libero voluptas. Omnis voluptatem aut architecto ut ab. Est optio non modi molestias magnam. Quis voluptas odio tempore. Atque ab placeat dolores commodi. Qui eos autem ut deserunt est. Et facere suscipit velit impedit. Qui rem dolor voluptas optio fugit minus. Et non praesentium reprehenderit est et impedit. Voluptas suscipit accusantium aut repellat nemo suscipit quo totam. Quam tempora numquam error rerum provident.',0,18,'colleagues-working-cozy-office-medium-shot.png',5,'2024-09-22 23:25:40','2024-09-22 23:25:40'),(40,'Methodology','Exercitationem autem consequuntur optio error nihil et possimus. Nemo ut quod sed error nihil eius qui. Perferendis quas dolorem quas ipsum excepturi reiciendis sunt. Corporis eos illo id et non sunt qui ut. A quos voluptatem distinctio aspernatur. Quod eos eveniet voluptas ipsam laudantium occaecati ducimus. Molestias quo ipsam eum vel nesciunt est aut. Voluptatum qui modi sequi itaque animi. Quae repellat iusto aut ut est unde. Commodi optio deserunt consequuntur eveniet illum ut ut. Totam consequatur dolore reprehenderit maiores ut ut qui. Modi sapiente adipisci quaerat beatae facilis excepturi quia ullam. Eum aspernatur voluptatem non optio alias. Ratione consequatur doloremque voluptatum quos aliquid perferendis dolores placeat. Vel nostrum dolor magni nisi a commodi. Voluptates atque qui aperiam rem accusantium possimus recusandae. Enim et eius et cum id perferendis quae. Natus non molestiae voluptas omnis.',1,8,'undraw_Graduation_re_gthn.png',6,'2024-09-22 23:25:40','2024-09-22 23:31:24'),(41,'Queendom','gurrrrrrrrrrrl',1,66,'1727058476.png',6,'2024-09-22 23:27:56','2024-09-23 02:15:04');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `github_id` varchar(255) DEFAULT NULL,
  `github_token` varchar(255) DEFAULT NULL,
  `github_refresh_token` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`UserName`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eloy','McKenziie','@Qherzog','waltermadeline@example.com','2024-09-23 06:02:38','$2y$12$T/MWsQhUy3x5qGtSdPpWwOewjoGKeF3MSek668j4UpfNWrytu59oC',NULL,NULL,NULL,1,'IDVkHmym6e','2024-09-23 05:48:03','2024-09-23 06:02:38'),(2,'Julio','Vandervort','tanya88','jena.feil@example.com','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'hGefXPLJGx','2024-09-23 05:48:03','2024-09-23 05:48:03'),(3,'Abigail','Mosciski','napoleon10','kirlin.percival@example.net','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'7l03XIBlYp','2024-09-23 05:48:03','2024-09-23 05:48:03'),(4,'Holly','Hessel','derrick96','cielo95@example.com','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'94qkXEkGgq','2024-09-23 05:48:03','2024-09-23 05:48:03'),(5,'Jaunita','Nolan','pbogisich','rorn@example.org','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'ypInE28Nze','2024-09-23 05:48:03','2024-09-23 05:48:03'),(6,'Trevion','Pfeffer','geraldine.grant','toy.isaias@example.org','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'0CIUPzzIMV','2024-09-23 05:48:03','2024-09-23 05:48:03'),(8,'Taya','O\'Keefe','jaiden15','xcruickshank@example.org','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,0,'a72o8BzI37','2024-09-23 05:48:03','2024-09-23 05:48:03'),(10,'Rex','Prohaska','hackett.hollis','miller.maxime@example.net','2024-09-23 05:48:03','$2y$12$5AqDuPHoxAaPqMBrKPG.Me0E/uUPHsJE09wplP/J35b40LT/B63zy',NULL,NULL,NULL,1,'8CZ98vHUj0','2024-09-23 05:48:03','2024-09-23 05:48:03'),(11,'Adonis','Zboncak','xmoore','rhett99@example.org','2024-09-23 05:48:05','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,0,'MrvfZrEzum','2024-09-23 05:48:06','2024-09-23 05:48:06'),(12,'Sallie','Skiles','sandy.volkman','sonya54@example.com','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,1,'sZyseSxJFL','2024-09-23 05:48:06','2024-09-23 05:48:06'),(13,'Ardella','Parisian','jones.dangelo','ambrose.oberbrunner@example.org','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,0,'gt267x61Jm','2024-09-23 05:48:06','2024-09-23 05:48:06'),(14,'Jordan','Hilpert','vaughn.kunde','reed.schinner@example.org','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,1,'1jVSMZ2k2F','2024-09-23 05:48:06','2024-09-23 05:48:06'),(15,'Zackary','McKenzie','janelle14','zmacejkovic@example.com','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,1,'UoefHyEuaO','2024-09-23 05:48:06','2024-09-23 05:48:06'),(16,'Eudora','Franecki','yyost','ahegmann@example.net','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,1,'2oca3lWYvW','2024-09-23 05:48:06','2024-09-23 05:48:06'),(18,'Richie','Considine','brooke.gottlieb','scasper@example.net','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,0,'6IoFR78FhX','2024-09-23 05:48:06','2024-09-23 05:48:06'),(19,'Zella','Christiansen','kaci66','jazlyn24@example.net','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,0,'SWao8948EJ','2024-09-23 05:48:06','2024-09-23 05:48:06'),(20,'Deon','Stroman','jazmyn.erdman','ward.maye@example.com','2024-09-23 05:48:06','$2y$12$rH3r1MVEFfZR.7xOzRcvr.8NRjGZDbbNFdKQcM16FI3mFk9jSD6SG',NULL,NULL,NULL,0,'reL2lt9YTi','2024-09-23 05:48:06','2024-09-23 05:48:06'),(21,'Conan','O\'brien','Irishboii🍀','viva@ireland','2024-09-23 05:49:38','$2y$12$epbJ00g4IjpU0whha//1mOFMzx7IA5wGiUjv/sfJrcXytE23a/JzG',NULL,NULL,NULL,1,'9PJxPvU5vFHoJt9VH990ENb0y5N0gpys2rehC1j4merQQlZuh3HOc381iANJ','2024-09-23 05:49:15','2024-09-23 05:49:38'),(22,'U-U','U.U','UwU','U@U','2024-09-23 05:52:43','$2y$12$6HW0Ps8Jv2jhz2twUGq.iOsNh6lzGsLGARg3RUPL.YB282Erc9yfq',NULL,NULL,NULL,1,NULL,'2024-09-23 05:52:43','2024-09-23 05:52:43'),(23,'o-0','o.0','0u0','o@o','2024-09-23 05:53:48','$2y$12$vAkZ6K9cRxmjqrEN1Ojyy.5zqqS7QjwgfMe4FCr3rKDG2NWANu5Zi',NULL,NULL,NULL,1,NULL,'2024-09-23 05:53:48','2024-09-23 05:53:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-24  4:53:34
