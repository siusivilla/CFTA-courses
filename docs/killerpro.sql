-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Ott 12, 2019 alle 17:38
-- Versione del server: 5.7.26
-- Versione PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `killerpro`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `killers`
--

CREATE TABLE `killers` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrizione` varchar(1000) NOT NULL,
  `specialita` varchar(255) NOT NULL,
  `zona` varchar(255) NOT NULL,
  `immagine` varchar(255) NOT NULL,
  `prezzo` decimal(19,3) NOT NULL DEFAULT '10.000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `killers`
--

INSERT INTO `killers` (`id`, `nome`, `descrizione`, `specialita`, `zona`, `immagine`, `prezzo`) VALUES
(1, 'Lady Elizabeth Bathory', 'La depressione non è solo un disturbo mentale, ma anche la migliore carta di Lady Elizabeth Bathory.<br>\r\nCon le prestazioni di questa donna preparata, il sottile filo che divide l\'omicidio e il suicidio si assottiglia ancor più, rendendo impossibile distinguerli.<br>\r\nChe aspetti? Vieni a dare un\'occhiata ai numerosi incarichi da lei svolti.', 'suicidio', 'america_nord', 'assets/img/killer-woman-1.png', '30.000'),
(2, 'Lady Pamela Voorhees', 'Se si è giunti alla conclusione che le donne rappresentano il massimo esponente in questa caterogia, il merito è solo di Lady Pamela Voorhees. Geniale, ammaliatrice e temeraria. Per questa donna affrontare la vittima non è un problema ma, anzi, una sfida.<br />Sei alla ricerca del killer più gettonato della categoria? Clicca su Lady Pamela Voorhees.', 'suicidio', 'europa', 'assets/img/killer-woman-1.png', '85.500'),
(4, 'Mr. Norman Bates', 'Il suo primo incarico risale alla sua adolescenza, quando la polizia non ha potuto far altro che classificare la morte di sua madre come suicidio.<br />\r\nMr. Norman Bates - così come per il personaggio da cui ha preso l\'appellativo - prima di diventare un sicario per KillerPro, era il proprietario di un piccolo motel, dove saziava in maniera discreta la sua voglia di sangue attraverso i clienti che vi pernottavano.<br />\r\nMr. Norman Bates non è stato mai accusato di alcun omicidio, malgrado la lunga lista. Non per niente la struttura porta ancora il soprannome di \'Il motel del suicidio\'.', 'suicidio', 'america_nord', 'assets/img/killer-man-1.png', '20.000'),
(5, 'Mr. Sweneey Todd', 'Sicario specializzato negli omicidi tramite simulazione di incidenti stradali. Abile nella manomissione dei componenti automobilistici e nel pedinamento del bersaglio.<br />\r\nMinuzioso, esperto e tenace. Sweeney Todd si classifica come uno dei migliori simulatori di omicidio dell\'Europa orientale.', 'incidente', 'europa', 'assets/img/killer-man-1.png', '50.000'),
(6, 'Mr. Francis Dolarhyde', 'Questo sicario dell\'america del nord è un professionista nel creare scenari di incidenti domestici. Che sia un\'inattesa fuga di gas, una violenta caduta dopo la doccia, un finto litigio matrimoniale o che sia una scenografica rapina finita male, Mr. Francis Dolarhyde è capace di stupire persino le menti più precise.<br />\r\nCon una lunga lista di omicidi mascherati, Mr. Dolarhyde potrebbe essere esattamente il killer che fa per te.', 'incidente', 'oceania', 'assets/img/killer-man-1.png', '20.000'),
(7, 'Mr. Michael Myers', 'Non lasciarti ingannare dalla sua giovane età e dal suo aspetto ordinario. Mr. Michael Myers è spinto da una forte passione per l\'omicidio e punta alla totale discrezione, giocando a suo favore ciò che l\'apparenza gli ha affidato.<br />\r\nRagazzo diligente, mai accusato o perfino sospettato, dal profilo basso e impensabile. Se ciò che cerchi è la cura maniacale per la messinscena, ciò che devi fare è prenotare Mr. Michael Myers.', 'incidente', 'america_nord', 'assets/img/killer-man-1.png', '40.000'),
(8, 'Mr. Jack the Ripper', 'Potrà anche avere il nome del famoso serial-killer Jack lo Squartatore, ma non temere, tutte le sue vittime risultano essere classificate dalla scientifica come morti naturali.<br />\r\nVuoi eliminare un bersaglio con il quale hai avuto pubblicamente un diverbio? Scegli Mr. Jack the Ripper. La polizia non potrà far altro che dichiararti innocente.', 'naturale', 'america_nord', 'assets/img/killer-man-1.png', '30.000'),
(9, 'Lady Mcbeth', 'Lasciati incantare dal variegato elenco di morti della nostra Lady Mcbeth. Una vera artista nel suo lavoro, capace di soddisfare i desideri più sfrenati del cliente, ma anche suoi!<br />\r\nSpulcia pure il suo dossier, siamo certi non ne rimmarrai deluso!', 'naturale', 'europa', 'assets/img/killer-woman-1.png', '20.000'),
(10, 'Mr. Jason Voorhees', 'Nuovo acquisto nella categoria Naturali. Mr. Jason Voorhees è un killer che si è fatto notare fin dal suo primo incarico. Impeccabile e puntiglioso, lavora come un veterano malgrado la sua poca esperienza.<br />\r\nVuoi investire sul nuovo? Siamo più che certi che il tuo feedback sarà positivo!', 'naturale', 'oceania', 'assets/img/killer-man-1.png', '80.000'),
(11, 'Mr. Hannibal Lecter', 'Non commettere l\'errore di giudicare troppo presto Mr. Hannibal Lecter. Sarà anche un uomo eccentrico, poco affabile e arrogante, ma è un lusso che può certamente permettersi.<br />\r\nColpi di stato, assalti a personaggi famosi, assassinii di importanti amministratori delegati. Tutti incarichi eseguiti magistralmente, anche in maniera del tutto solitaria.<br />\r\nNon ci credi? Dai un\'occhiata alla sua scheda, e preparati a spalancare gli occhi!', 'vip', 'europa', 'assets/img/killer-man-1.png', '60.000'),
(12, 'Lady Myrna Harrod', 'Non è un killer adatto a tutti - e non sto parlando del suo cattivo caratteraccio! - ma se la parcella richiesta sarà così dispensiosa puoi facilmente capirne il motivo.<br />\r\nLady Myrna Harrod è un killer che ritiene l\'eccessivo contatto con il proprio cliente un difetto.<br />\r\nPredilige l\'azione alla teoria. Lady Myrna Harrod è inarrestabile, silenziosa e insuperabile. Pronta sempre ad agire e a compiere il suo dovere. Mettila subito alla prova!', 'vip', 'oceania', 'assets/img/killer-woman-1.png', '40.000'),
(13, 'Mr. Edward Hyde', 'La categoria VIP non include solamente figure di una certa notorietà. È così che la pensa il nostro Mr. Edward Hyde.<br />\r\nVuoi risolvere definitivamente dei problemi con il tuo capo? Hai bisogno di qualcuno che ti spiani la strada per ottenere il ruolo a cui ambisci da tempo? Mr. Edward Hyde è il killer che fa per te.<br />\r\nNon solo sarete accomunati dallo stesso ideale, ma sarà uno spasso decidere la modalità di esecuzione.<br />\r\nProvare per credere.', 'vip', 'oceania', 'assets/img/killer-man-1.png', '40.000');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL COMMENT 'User id',
  `email` varchar(250) NOT NULL COMMENT 'Users email address',
  `password` varchar(200) NOT NULL COMMENT 'User password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'killerpro@gmail.com', '3dca16d27f6c60a9264ba626dec2967a'),
(2, 'siusi.villa@gmail.com', '212254befa2ea5663c1b0de461658286');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `killers`
--
ALTER TABLE `killers`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `killers`
--
ALTER TABLE `killers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User id', AUTO_INCREMENT=3;
