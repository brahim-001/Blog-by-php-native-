-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 23 août 2020 à 23:19
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_native`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title`, `contenu`, `image`, `date`, `id_categorie`, `id_auteur`) VALUES
(31, 'United States sanctions against Iran', 'The United States since 1979 has applied various economic, trade, scientific and military sanctions against Iran. U.S. economic sanctions are administered by the Office of Foreign Assets Control. Currently, the U.S. sanctions against Iran include an embargo on dealings with the country by the U.S., and a ban on selling aircraft and repair parts to Iranian aviation companies.[1]\r\n\r\nThe United States has imposed sanctions against Iran in response to the Iranian nuclear program and Iranian support for Hezbollah, Hamas, and Palestine Islamic Jihad, that are considered terrorist organizations by the US. Iranian support for the Shi’ite militias in Iraq and the Houthis in the Yemen civil war are also in contention.\r\n\r\nUS sanctions can be imposed under the National Emergencies Act (NEA) of 1976, the International Emergency Economic Powers Act (IEEPA) of 1977 and the Iran and Libya Sanctions Act of 1996 (ILSA, later renamed to Iran Sanctions Act (ISA)). Declarations under NEA and IEEPA must be renewed annually to remain in effect. Another sanctions law is the Countering America&#039;s Adversaries Through Sanctions Act of 2017.\r\n\r\nOn 17 May 2018 the European Commission announced its intention to implement the blocking statute of 1996 to declare the US sanctions against Iran null and void in Europe and ban European citizens and companies from complying with them. The Commission also instructed the European Investment Bank to facilitate European companies&#039; investment in Iran', 'téléchargement (2).jpg', '2020-08-23', 77, 38),
(32, 'What happened in the missile attacks?', 'It was the most direct assault by Iran on the US since the seizing of the US embassy in Tehran in 1979.\r\n\r\nA total of 16 missiles were launched from at least three sites in Iran at about 02:00 local time on Wednesday (22:30 GMT on Tuesday), Defence Secretary Mark Esper said.\r\n\r\nAt least 11 of them struck the air base in Al Asad, west of Baghdad, and at least one more hit the Irbil base, he said. Several other missiles landed at some distance from the targets.\r\n\r\nDid Iranian strike deliberately avoid US troops?\r\nWhich bases were targeted?\r\nUS sanctions on Iran: Six charts\r\nUS Joint Chiefs of Staff Chairman Mark Milley said he believed early warning systems had prevented casualties.\r\n\r\n&quot;[What] I believe, based on what I saw and what I know, is that they were intended to cause structural damage, destroy vehicles and equipment and aircraft, and to kill personnel,&quot; he said.', 'politique0.jpg', '2020-08-23', 77, 39),
(33, 'Mnuchin Paved Way for Postal Service Shake-Up', 'WASHINGTON — In early February, Treasury Secretary Steven Mnuchin invited two Republican members of the Postal Service’s board of governors to his office to update him on a matter in which he had taken a particular interest — the search for a new postmaster general.\r\n\r\nMr. Mnuchin had made clear before the meeting that he wanted the governors to find someone who would push through the kind of cost-cutting and price increases that President Trump had publicly called for and that Treasury had recommended in a December 2018 report as a way to stem years of multibillion-dollar losses.\r\n\r\nIt was an unusual meeting at an unusual moment.\r\n\r\nSince 1970, the Postal Service had been an independent agency, walled off from political influence. The postmaster general is not appointed by the president and is not a cabinet member. Instead, the postal chief is picked by a board of governors, with seats reserved for members of both parties, who are nominated by the president and confirmed by the Senate for seven-year terms.\r\n\r\nNow, not only was the Trump administration, through Mr. Mnuchin, involving itself in the process for selecting the next postmaster general, but the two Democratic governors who were then serving on the board were not invited to the Treasury meeting. Since the meeting did not include a quorum of board members, it was not subject to sunshine laws that apply to official board meetings and there is no formal Postal Service record or minutes of what was discussed.\r\n\r\n', 'robot-darpa-1_6240172.jpg', '2020-08-23', 79, 40),
(34, ' Economic Data Points to Pause in Recovery as Aid Programs Expire ', 'The pandemic has caused dramatic economic upheaval, putting millions of Americans out of work as governments ordered nonessential businesses to temporarily shutter in order to help slow the spread of Covid-19. But for many small businesses, the closures may end up being permanent. \r\n\r\nAs of Aug. 11, there are about 155,000 total business closures reported on Yelp since March 1, according to data from the reviews company. About 91,000 of the closures, or 59%, are permanent.\r\n\r\n“Many businesses have withstood having to temporarily shut their doors and operate at reduced capacity for months,” Justin Norman, Yelp’s vice president of data science, said Wednesday on “Squawk Box.” “However the longer that continues without sufficient government aid or customer aid, the more businesses we’re going to see forced to permanently shut their doors.” \r\n\r\nCongress established in March the Paycheck Protection Program as a way to provide loans that can turn into grants for small businesses. Billions of dollars were lent through the program. However, the window to apply for PPP loans has now closed — and negotiations on another coronavirus relief bill have ground to a halt. \r\n\r\nThe Federal Reserve also established a Main Street lending program, which has capacity for $600 billion in loans. But it has faced logistical challenges since it was announced in the spring. Banks originate the loans and the Fed purchases 95% of the amount. In its first month, just 13 companies gained approval through the Fed program, with total value a little more than $92 million.', 'Visuel-Actualite.gif', '2020-08-23', 79, 40),
(35, 'The Electric Typewriter', 'Says Bill Russell: &quot;Basketball is a game that involves a great deal of psychology. The psychology in defense is not blocking a shot or stealing a pass or getting the ball away. The psychology is to make the offensive team deviate from their normal habits. This is a game of habits, and the player with the most consistent habits is the best. What I try to do on defense is to make the offensive man do not what he wants but what I want. If I&#039;m back on defense and three guys are coming at me, I&#039;ve got to do something to worry all three. First I must make them slow up or stop. Then I must force them to make a bad pass and take a bad shot and, finally, I must try to block the shot. Say the guy in the middle has the ball and I want the guy on the left to take the shot. I give the guy with the ball enough motion to make him stop. Then I step toward the man on the right, inviting a pass to the man on the left; but, at the same time, I&#039;m ready to move, if not on my way, to the guy on the left. I&#039;m giving away all my secrets.&quot;\r\n\r\n&quot;What Russell really does,&quot; says teammate Tommy Heinsohn, &quot;is demoralize. The other players are afraid to take their normal shots. Instead, they&#039;re looking to see what Russell will do.&quot; As Bill Bridges of the St. Louis Hawks said recently, &quot;Russell told me I better bring pepper and salt to the next game. He told me I was going to eat basketballs.&quot; Indeed, the ball has come to be known by the pros as a Wilson burger, after its manufacturer.\r\n\r\n&quot;In my modest opinion,&quot; says Russell, who is not a particularly good shooter, &quot;shooting is of relatively little importance in a player&#039;s overall game. Almost all of us in the NBA are All-Americas. We became All-Americas by averaging 20 points or more a game, so by the layman&#039;s standards all of us can shoot. It&#039;s the other phases of the game that make the difference. If you&#039;re going to score 15 and let your man score 20 you&#039;re a deficit. If your value to the team is strictly as a shooter, you are of very little value. Offense is the first thing you learn as a kid in any sport: catch a pass, dribble, bat, shoot. You learn the offensive aspects of a game long before you learn there even are defensive aspects. These are the skills you come by naturally. Defense is hard work because it&#039;s unnatural.\r\n\r\n&quot;Defense is a science,&quot; Russell says, &quot;not a helter-skelter thing you just luck into. Every move has six or seven years of work behind it. In basketball your body gets to do things it couldn&#039;t do in normal circumstances. You take abnormal steps, you have to run backward almost as fast as you can run forward. On defense you must never cross your legs while running, and that&#039;s the most natural thing to do when changing direction. Instead, you try to glide like a crab. You have to fight the natural tendencies and do things naturally that aren&#039;t natural.\r\n\r\n&quot;In rebounding, position is the key. No two objects can occupy the same place at the same time. Seventy-five percent of the rebounds are taken below the height of the rim, so timing is important, because almost everyone in the league can reach the top of the rim. A really important part of rebounding is being able to jump up more than once. You have to keep trying for that ball. Sometimes you jump four or five times before you can get your hands on it. I used to practice jumping over and over again. When I was 6 feet 2, I could jump to the top of the rim 35 times, over and over.\r\n\r\n&quot;You have to have strong hands. Most of the time three guys will have their hands on the ball at the same time, and you have to be able to grab it away. I guess I just naturally have strong hands, but if I didn&#039;t I would exercise until they were strong. But getting the ball is only half the job. Then you have to do something with it.&quot;\r\n\r\nThe foundation of Russell&#039;s brilliant play, however, is not blocking shots, rebounding or his other purely physical skills. It is, rather, his admirable mind and purpose, his intelligence—he knows what to do with the ball—and his pride. &quot;People don&#039;t realize,&quot; says Auerbach, &quot;that this is a brain out there. People think of him as just a big guy with fantastic coordination, but he approaches being a genius once the game starts. I admire his mind off the court, too,&quot; Auerbach adds not entirely facetiously, &quot;because he&#039;s smart enough to understand me.&quot;\r\n\r\n&quot;To sum it all up,&quot; says Heinsohn, &quot;he&#039;s got a hell of a lot of pride. When he&#039;s playing his game it makes us almost unbeatable, and the secret to the thing is that he gets himself up so often. He&#039;s so nervous before a game he upchucks.&quot;\r\n\r\n&quot;He wants to be the best in everything he does,&quot; says Co-Captain Frank Ramsey. &quot;He hates to lose. As long as the team&#039;s winning he&#039;s completely happy. As long as he&#039;s playing real great ball we&#039;re winning. Then he&#039;s the life of the party. You hear that laugh 10 miles around. He&#039;s only moody with himself.&quot;\r\n\r\nAlthough Bill Russell has much to laugh about and does in his high, rackety way (&quot;There are only two things that could make me quit coaching,&quot; says Auerbach. &quot;My wife and Russell&#039;s laugh&quot;), he is, at intervals, an angry, dissatisfied and aloof man of uncommon principle, and is no less remarkable as a person than he is as an athlete.\r\n\r\nRussell&#039;s scraggly beard is a telling indication of the man. Not only is Russell nearly 6 feet 10 and black—circumstances, obviously, over which he has no control—but he has deliberately set himself further apart by being one of the few professional athletes to wear a beard. Ask him why he grew it and he will reply in time, if he feels like it: &quot;I&#039;ve thought about it, and I&#039;ve thought about it. Why did I wear the beard, why do I? It&#039;s part of this thing—I&#039;ve always fought so hard to be different and I am different without even trying, and maybe it&#039;s just my own little revolution. It just isn&#039;t done in polite circles, in a sense. But I do think it&#039;s part of my personality. When I first joined the Celtics I shaved the beard off. I did it on my own. It was none of their business, and if I had valued their opinion I would have asked them. I made a concession to conformity at that time. Then I grew it back. After we won the first championship I let Heinsohn shave it off, and then I grew it back again. It was a very childish thing, in the sense of defiance. I wear it now to let people know I am an individual. I do think for myself, and I&#039;m very opinionated. Contrary to popular belief, I&#039;m a living, thinking, breathing human being.&quot;\r\n\r\nThey say I owe the public this and I owe the public that. What I owe the public is the best performance I can give, period. If someone asks me for an autograph I think it&#039;s a waste, but I sign them occasionally. Sometimes I just feel like being nice, or it gets rid of them. I personally don&#039;t care what people think of me. I don&#039;t think I think any different than anyone else, but I may act different. One thing I&#039;m not is a liar. It&#039;s not a matter of morals—more a matter of ego. I think too much of myself to misrepresent myself. I&#039;ll do anything I can for anyone as long as it doesn&#039;t hurt me. But I have sympathy for very few people. Basketball—that&#039;s all people want to talk to me about. It&#039;s a waste, because they have nothing to say. I resent people who talk to you and have nothing to say. So I don&#039;t say anything. &#039;How&#039;s the weather up there?&#039; &#039;How are things on Main Street?&#039; That&#039;s where I live. What the heck kind of question is that? &quot;You must be a basketball player, because you&#039;re so tall. Just walk up and put it in, eh?&#039; No, I&#039;m not a basketball player. I just kept growing. &#039;What size bed do you sleep in?&#039; I hate for people to get personal. A big bed. &#039;How much do you eat?&#039; It&#039;s ridiculous. If you mind your own business, life ain&#039;t bad. If you do the best you can that&#039;s the best you can do.\r\n\r\n&quot;We&#039;re a bunch of grown men playing a child&#039;s game. It&#039;s a child&#039;s game we&#039;ve made into a man&#039;s game by complicating it. Silly, isn&#039;t it? We entertain people for x number of hours during the winter. They may talk about it for a few minutes, maybe an hour; then it&#039;s forgotten. Is this a contribution? No. Analyze it—it&#039;s a silly game. I&#039;m also a silly man because I enjoy it. I enjoy baseball, too. Perhaps I&#039;m a little dull.&quot;\r\n\r\nIt is not easy for a white man to understand or totally accept the vision of a black man; skin is the hardest boundary. The point is this: Bill Russell, or any other black man like him, does not want the white man&#039;s sympathy or, indeed, his friendship. What he wants is recognition and acceptance of himself as an individual, a black individual, who can meet the world on equal terms and fare unequally, according to his merit.\r\n\r\n&quot;A few things have happened,&quot; Russell says. &quot;I&#039;ve got three kids now, a certain amount of responsibility to them. I also have a certain amount of responsibility to a lot of other kids. I give most Negroes a certain amount of pride. Here&#039;s one of our guys doing all right, they say, the world can&#039;t be all bad. That contribution is very shallow. Of course, I&#039;m practical. Where else but in basketball could I command this salary? [It is estimated in excess of $40,000.] Man does what he has to, but the contribution I&#039;d like to make as a person—to my kids and little black kids all over the world—is to make life better, so their ambitions aren&#039;t stifled when they face the world, to give them the opportunity to do what they&#039;re most skilled at. I could have a burning ambition to give my kids a million dollars. If I gave them that alone, I&#039;d be giving them nothing.&quot;\r\n\r\nThe most any kid can ask for,&quot; says Russell, &quot;is to succeed or fail on his merits. Success and failure are relative. Everyone doesn&#039;t have presidential abilities and everyone can&#039;t be an All-America. It doesn&#039;t necessarily mean you&#039;re a failure. My father&#039;s a foundry worker. This doesn&#039;t necessarily mean he&#039;s a failure—because another person&#039;s father is a lawyer. Society needs both. Some people are going to be laborers, but why say a man has to be a laborer because he&#039;s black? One right we never had in this country—we never had the right to be a failure or an individual. Why if one black man fails should all black men fail? That&#039;s what the struggle is about; whether it&#039;s through love, as with Martin Luther King, or through pride, as with the N.A.A.C.P., or through hate, as with Malcolm X and Elijah Muhammad.\r\n\r\n&quot;What does the American Negro want? the editorials ask. I find this very stupid. We&#039;re all products of our society, and the acceptable standards are the same. We want the same things. When they write about Birmingham, the papers refer to &#039;outsiders&#039; and &#039;racial agitators.&#039; To the black people of the U.S. there is no such thing as an outsider. There&#039;s been too much play on words in this country. Negroes have to earn their rights, they say. My oldest son, Buddha [William Felton Russell Jr.], was born on November 2, 1957. Suppose 50 kids were born around Boston that day. Why does my son have to earn any more than any of those 50 kids? I was born on February 12, 1934. Why do I have to earn more than anyone else?\r\n\r\n&quot;There used to be a lot of emphasis on the first Negro to do this, the first Negro to do that. It&#039;s unimportant who&#039;s the first or who&#039;s the last. The important thing is—how many? The rest is tokenism. When Thurgood Marshall was made a judge it made me feel real good, because he never attempted to disassociate himself, like some educated Negroes. Some Negroes live in a twilight zone, closing themselves off into a small, white society. The Negro world doesn&#039;t concern them. I feel sorry for them—to an extent. Education is the acquiring of the ability to think for oneself; anyone can get through college on memory courses. If a Negro judge says, &#039;I don&#039;t think of myself as a Negro, just as a competent judge,&#039; he&#039;s not facing life the way it is in our society. It&#039;s harder to face it the other way, but you can sleep at night—every night.&quot;\r\n\r\nAlthough everyone in his family is a life member of the N.A.A.C.P., Russell has not played a major role in any single Negro organization; he does not look upon himself as a leader, and is uncomfortable in crowds. He views the Negro movement as being various in means but single in aim, and feels that its factionalism is not divisive but a search for the most effective way.\r\n\r\n&quot;I would have loved to go to Birmingham,&quot; Russell says, &quot;but I&#039;m not passive. Sometimes I think I have tendencies to violence. I&#039;ve been mad enough to fight three times in my life, and each time I wanted to kill the man. You know the athletes I admire? Ted Williams, Jackie Robinson and Sonny Liston. It&#039;s easy to be easygoing and friendly to everyone. I think a man has to be what he is. If he feels good, he is good; if he doesn&#039;t, he isn&#039;t. I&#039;m an admirer of Floyd Patterson, too. These are honest people in the sense of representing themselves. Some Negro athletes don&#039;t show me much. I&#039;m disappointed in them. They are politicians in the sense of saying the right things all the time.\r\n\r\n&quot;If I went down there to Birmingham and let someone spit on me and didn&#039;t do anything about it, it wouldn&#039;t be me. If you never really express dissatisfaction concretely, people tend to ignore it. If you believe in something you&#039;ve got to say it. This passive kick—if it doesn&#039;t work, how can they keep preaching it? It is predicated on the premise that people are basically moral. If they are right, this is wonderful. If they are wrong, the religious phase of the movement will be destroyed. If Martin Luther King is wrong he has failed as a leader. Maybe I&#039;m becoming a fatalist or whatever you call it. Morality is a very large word. Morality and love have a lot in common. Who can really define it? What is moral and what is immoral? It is relative.\r\n\r\n&quot;I&#039;ve been reading about the Black Muslims. A lot of things they say express the way I feel perfectly, or, rather, a great deal of the things they say I cannot disagree with. Can the races get along? Yes. Will they get along? That&#039;s the question. The Muslims say the white man&#039;s a devil. I don&#039;t agree with that, because I don&#039;t think there is such a thing as a devil. They say the white man is evil. I wonder about that in the sense that I wonder whether all men are evil. I dislike most white people because they are people. As opposed to dislike, I like most black people because I am black. I consider this a deficiency in myself—maybe. If I looked at it objectively, detached myself, it would be a deficiency.&quot;\r\n\r\nIn 1959 Russell first went to Black Africa on a tour for the State Department. The continent had such an impact upon him that he bought part ownership of a rubber farm in Liberia and named his baby daughter Karen Kenyatta after Jomo Kenyatta, the prime minister-designate of Kenya and onetime Mau Mau leader, whom Russell greatly admires. Russell is thinking quite seriously of settling in Liberia. &quot;I found a place I was welcome because I was black instead of in spite of being black,&quot; he says.\r\n\r\n&quot;The basic problem in Negro America is the destruction of race pride. One could say we have been victims of psychological warfare, in a sense, in that this is a white country and all the emphasis is on being white. Whiter than white. According to the law, immigrants from northern European countries are more desirable than any others. When a white man says his folks come from Ireland, he says it with a certain amount of pride. He probably can trace his family tree for generations, for whatever it&#039;s worth. This is not true of the American Negro. Until the emergence of the independent African countries all we knew about Africa was from the Tarzan and Jungle Jim movies. How stupid they made the natives! One white man—Tarzan—was the best and smartest at everything. Even King Kong, after accepting the sacrifice of blacks for years, when he was offered a white girl he didn&#039;t kill her. He fell in love with her! Pride in being black was practically destroyed by seeing stupid things like this; there was almost a sense of self-degradation. Also, until very recently, the so-called Negro elite was fair-skinned.\r\n\r\n&quot;The problem I see in Africa is that it has to build a middle class. All your great political and social changes have been brought about by the middle class—merchants, artisans, technicians. Africa&#039;s needs are not necessarily administrators but people who can do—plumbers, tool-and-die-makers, draftsmen. Black Africa is stepping from carrying things on the head to carrying them in airplanes. They&#039;ve skipped the wheelbarrow, the horse and buggy and, practically, railroads. They have problems so immense, where do you start? You educate as many as you can. But everyone who gets an education wants to be an administrator. People have to realize there are stations in life, forms of success. Everyone wants to have the ultimate success. Everyone can&#039;t have it. Someone must roll their sleeves up and go to work. I find it a very perplexing problem, whether I should go to Africa or stay here. I&#039;ve thought about it a great deal. If my contribution would be more concrete here, no doubt I should stay here.\r\n\r\n&quot;When I look at the struggle of the American Negro I can&#039;t help but be very, very proud. With what we&#039;ve had to work with we&#039;ve done a pretty good job of surviving. But we still have so far to go.... It would be a hell of a country.... It&#039;s a great country as it is. Now we have to define great; an ambiguous word. Great industrial empire, standard of living.... I think it would be so much greater if everyone had an equal opportunity in every field. There is no way to speculate how much brainpower this country has lost. And we don&#039;t have to like each other to live together peacefully and equally. Have you ever read how in the time of drought all the animals use the same water hole? The lions stay with the lions, the tigers with the tigers, the elephants live with elephants, but they all use the same water hole.&quot;\r\n\r\nOf course, because of his wealth and position, Russell&#039;s experiences do not parallel those of most black men most of the time. He lives on a white block in a white town, has white baby-sitters and drives a 1964 Lincoln Continental convertible. The fact that owning a big car is considered a Negro stereotype does not concern Russell. &quot;I&#039;ve passed the stage,&quot; he says, &quot;where I have to prove anything. I happen to like watermelon, too. There may come a time when I have to ride a bicycle. It won&#039;t bother me. It just won&#039;t be as fast or convenient.&quot; In Boston, Russell&#039;s celebrity is so great he can no longer enjoy himself at the ballpark or at nightclubs; he gets too much attention. Once in a while, however, the ineradicable fact of being black, which he has never forgotten intellectually, falls upon him and wounds him like a blow.\r\n\r\n&quot;In the summer of 1962,&quot; Russell said the other day, &quot;I took my two sons to Louisiana, where I was born and lived for nine years, to see my grandfather. I make a reasonable living, I&#039;m a reasonably intelligent person; I bathe regularly, so I&#039;m pretty much a normal human being. But from the time I left Washington, D.C., we couldn&#039;t eat. I had only driven the road once before, so I was following the map, staying on the main road. We couldn&#039;t stop and eat. Or sleep. I wasn&#039;t really hungry. I was just trying to get food for my kids. I wasn&#039;t interested in socializing, or rubbing elbows. Some Negro entertainers try to show the whites that they are nice people. All of us are nice people, but this movement is not a popularity contest. I don&#039;t care if the waitress likes me when I go into a restaurant. All I want is something to eat. I drove a pretty nice car, had a few hundred bucks on me—legal tender—but I couldn&#039;t stop to eat or sleep. I bet any Russian you name, from Khrushchev on down, would have had a nice trip to Louisiana. What can you tell a kid 5 and a kid 3? No one can justify this to me. Customs and traditions and all that junk!\r\n\r\n&quot;One of the greatest crimes is apathy. I&#039;m kind of hardheaded. You&#039;re either against me or for me. Being neutral you support the status quo. You see this going on—you say that&#039;s sad, it really shouldn&#039;t be. Say it to a few people, and it makes you feel better. This is apathy. All I ask is that you practice good citizenship. Vote and try to accept people for what they are as persons. If you do that you give everyone an equal chance. If you come to me and say you&#039;re not prejudiced, you&#039;re lying. I think all whites feel guilty, but I&#039;m not sure they know what they feel guilty about.&quot;\r\n\r\nBill Russell&#039;s life is founded on the facts that he is black, was poor and grew taller than most men. He was born in Monroe, La. and moved to Oakland, Calif. when he was 9. When he was 12 his mother died; he was raised by his father. &quot;When my mother died,&quot; Russell says, &quot;my father was a young man and he could very easily have shipped me and my brother off with relatives, but we stayed together. It wasn&#039;t all good and it wasn&#039;t all bad; some of the bad things that happened I have come to understand. When you&#039;re poor it&#039;s a different world.\r\n\r\n&quot;My brother used to run track. Did the 100 in 10.2, 10.4—that&#039;s not bad—and my father came out one day and raced him with work shoes on. My brother says he won, and my father says he won, and I say it was a dead heat. It&#039;s not important. The important thing was that my father got in the race. I remember this field in Louisiana where the grass grew very tall. Sometimes we&#039;d all play hide and seek—the four of us—in that field. When it was time to go in, my father would pick me up with one arm, pick up my brother with the other arm, my mother got on his back, and he ran us all the way home. Everybody had a great time....&quot;\r\n\r\nRussell was hardly an outstanding basketball player as a youngster. In fact, in McClymonds High in Oakland, he was not even third-string junior varsity. There were 15 uniforms but 16 players. Russell and another substitute shared the 15th uniform, dressing for alternate games. In the second semester of his junior year Russell was cut from the jayvee. He would have quit basketball in despair except for the foresight of the varsity coach, who had been his homeroom teacher in junior high school; he had Russell join the varsity where he became, at last, a full-fledged third stringer. The coach&#039;s name is George Powles; he is a white teacher in a school that is almost totally Negro. &quot;I have never met a finer person,&quot; Russell says. &quot;I owe so much to him it&#039;s impossible to express.&quot; In his senior year Russell finally became a starter and was the sixth or seventh highest scorer. &quot;It was an act of kindness on Powles&#039;s part,&quot; he says. &quot;He used to tell the guys I&#039;d be a pretty good basketball player. I couldn&#039;t see it. He gave me money so I could join the boys&#039; club and play every day. It was frustrating. Most of the kids wouldn&#039;t let me play. I had to play with the little kids, and who wants to play with them when you&#039;re 6 feet 2!&quot; McClymonds won the league championship, but Russell did not even make third team all-league, and there were but six teams in the league. It was due only to the divination of Hal De Julio, who played on the University of San Francisco team that won the National Invitation Tournament in 1949, that Russell got an athletic scholarship at USF; his solitary offer. At USF Russell blossomed overnight; he was twice an All-America and led his team to 55 straight victories and two NCAA championships. In 1956, at Melbourne, Russell was a standout on the undefeated U.S. Olympic team.\r\n\r\nRussell also excelled at track and field. At USF he ran the 440 in 49.5 and high-jumped 6 feet 9¼ but, curiously, the only reason he went out for the sport was to get a varsity letter as a freshman; in basketball he had to settle for a freshman numeral. &quot;I didn&#039;t think I was very good,&quot; he says, &quot;but I found I could see all the great athletes from a good seat. It was sheer enjoyment, even more as a spectator than as a participant. It was like being at a carnival. It was like being invisible and being some place you always wanted to be.&quot;\r\n\r\nAlthough he speaks highly of the Boston Celtic management, Russell feels that the NBA has quite some way to go before it is accepted as a first-class league. He complains, for example, that the NBA has no pension fund and that the league bungled and lost its TV deal by putting on too many shows between mediocre teams. &quot;The papers made a big deal about the rivalry between Wilt Chamberlain and myself,&quot; he says, &quot;and we were on TV together three times in two years.&quot; He regards officiating as one of the NBA&#039;s weakest points. &quot;I acknowledge it&#039;s a difficult game to referee,&quot; he says, &quot;but there should be more than three good referees in the whole league, which is all there are. The only way to get the best referees is to make it worth their while. The referee is just as important as the players. With a good referee the better team will win. In basketball, the referee can influence the game, set the tempo. If the price is right—$10,000 to $15,000—and you put them under contract, you&#039;ll get a lot of good ones.&quot;\r\n\r\nAlthough Russell is just now entering his prime as a player, he often ponders quitting basketball. &quot;When I think about it,&quot; he says, &quot;there are a lot of things to consider, but it never has anything to do with quitting on top. First of all, I&#039;m very much afraid of airplanes. Secondly, the game takes a lot out of me. I call it a nine-hour game, two hours getting mentally prepared, two hours for the game itself and five hours before I get to sleep. Sometimes, even then, I can&#039;t get to sleep. I feel that if I don&#039;t have a good game we will probably lose, and it will be my fault. During the playoffs it&#039;s a 16-hour game. People say Floyd Patterson should quit. I don&#039;t think so. Because he&#039;s not champion he&#039;s not a failure. I think it&#039;s false values if a guy feels he has to quit on top. There are few enough pleasures in life not to do the thing you want to do.\r\n\r\n&quot;One of the saddest things that has happened to me,&quot; Russell said the other day, &quot;is that in basketball so many good things have happened to me it&#039;s hard to get a real thrill any more. You know what I get excited about now?—when my kids say funny things or I get two new speakers for my stereo, although I had a perfectly good system before that.&quot;\r\n\r\nIn Russell&#039;s home in Reading, a Boston suburb, he has installed a $2,100 stereo system—he has 1,500 LP albums and who knows how many 45s—and some $5,000 worth of electric trains are in the basement. Recently, his wife Rose began displaying some of Russell&#039;s basketball trophies around the house. &quot;If it was up to me, I&#039;d put them away again,&quot; Russell says. &quot;As far as I&#039;m concerned, there should be no pictures of the man of the house in his home. And no trophies. Outside achievements don&#039;t belong in a family setting. But Rose has her own ideas, too. She&#039;s the finest person I ever met. I&#039;ve told her many times that if I was married to anyone else I wouldn&#039;t be married. It&#039;s difficult to live with a person of my character. I&#039;m moody and demanding, in some ways inconsiderate. In other ways I&#039;m a pretty nice guy, I think.&quot;\r\n\r\nWhen Bill Russell permits you to get to know him, you discover quickly that he is more than just &quot;a pretty nice guy.&quot; You discover a first-rate and rewarding person. And when you are talking to him, or listening to him, or beating him in gin rummy—he&#039;s no ace at that game—you do not think of him as a basketball player, or a giant, or a Negro, finally, but as someone it is worth your while to be with.\r\n\r\n\r\n', 'sport.jpg', '2020-08-23', 78, 40),
(36, ' Mikey Williams In Conversation With Naomi Osaka ', 'Naomi Osaka is one of the top tennis players in the world, having won two Grand Slam titles in the past three years. Mikey Williams, a rising high school sophomore, is one of the top-ranked basketball prospects in the country and made waves recently for expressing an interest in attending a historically Black college or university (HBCU), as opposed to a traditional NCAA powerhouse. They met on Zoom to discuss being shaped by the protests this year and their long-term goals off the court.\r\n\r\nMikey Williams: You beat your favorite tennis player, Serena Williams. I’m not in that position yet—to where I can compete against the players I look up to. How did it feel?\r\n\r\nNaomi Osaka: It feels really crazy because you grow up watching them. Just for them to be seeing you as an opponent is very surreal. I feel like I dreamed of the moment—and for it to happen in real life was definitely an out-of-body experience.\r\n\r\nWhatever sport you play, you’re compared to the person that’s most similar to you—and for me it was always Serena.\r\n\r\nI want to be a good enough player to stand on my own. I want to carve my own legacy.\r\n\r\nMW: Someone I’ve always looked up to is LeBron James: I used to wear his jersey. After me and his son Bronny started playing together, I got to know him— and it’s dope I can now take notes from him in different ways. How he handles himself off the court is huge for me: he created a school, has all these foundations and is speaking up against injustice. Did the protests this summer inspire you to become more outspoken about inequality?\r\n\r\nNO: Personally, because of COVID and the quarantine, I was able to stay in one place for the longest amount of time I have in my life. But I actually flew to Minneapolis with my boyfriend, and we saw everything. That was a life-changing moment. I think athletes are scared of losing sponsors whenever they speak out. For me, that was really true, because most of my sponsors are Japanese. They probably have no idea what I’m talking about, and they might have been upset. But there comes a time where you feel like you gotta speak on what’s right and what’s important.\r\n\r\nMW: Yeah. As young athletes, we’re being controlled a lot. But last month, I cut down my list of colleges I want to attend down to five HBCUs and five PWIs [predominantly white institutions]. I hope I can make a change in college sports. A lot of people think they have to go to Duke, Kentucky or UCLA to get to where they want to go.\r\n\r\nI don’t have anything against those schools or coaches. But we don’t realize that the only reason we look at those schools is because we’re the ones going. If certain players take the HBCU route, it can change sports forever.\r\n\r\nNO: The day you posted that, my boyfriend showed it to me, and he was so excited. You definitely made an impact.\r\n\r\nMW: What is it like representing Blackness on an international scale?\r\n\r\nNO: Because tennis is a majority-white sport, I do feel like I’m a representative—and because of that, I feel like I shouldn’t lose, sometimes. But it’s a very big source of pride. I feel like it gives me a lot of power, and I always feel more welcomed in certain cities.', 'Endless Hiking.jpg', '2020-08-23', 77, 38);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_aut` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_aut`, `fullname`, `email`, `avatar`) VALUES
(38, 'ali', 'ali@gmail.com', 'person_1.jpg'),
(39, 'ahmed', 'ahmed@gmail.com', 'person_4.jpg'),
(40, 'jhon', 'jhon@gmail.com', 'person_5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_cat`, `name`, `image`) VALUES
(77, ' Politic  News', 'politics3.jpg'),
(78, 'Sport', 'sport1.jpg'),
(79, 'Economic', 'téléchargement.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comment` int(11) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `date_com` datetime NOT NULL,
  `comment` text NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_comment`, `nickname`, `date_com`, `comment`, `id_article`) VALUES
(54, 'brahim', '0000-00-00 00:00:00', 'super !\r\n', 34),
(55, 'ali', '0000-00-00 00:00:00', 'thanks for sharing\r\n', 35);

-- --------------------------------------------------------

--
-- Structure de la table `dataadmin`
--

CREATE TABLE `dataadmin` (
  `id` int(111) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dataadmin`
--

INSERT INTO `dataadmin` (`id`, `name`, `email`, `adminPassword`) VALUES
(8, '', 'brahim@gmail.com', 'malkomx'),
(9, '', 'admin@gmail.com', '$2y$10$RmW2.jMdOY.OQFJ/fmc5ceXZ8krCrWqOiX24Lr0ZM3OT/.cJ4JcjS');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `article_category` (`id_categorie`),
  ADD KEY `article_auteur` (`id_auteur`) USING BTREE;

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_aut`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_article` (`id_article`);

--
-- Index pour la table `dataadmin`
--
ALTER TABLE `dataadmin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_aut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `dataadmin`
--
ALTER TABLE `dataadmin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_category` FOREIGN KEY (`id_categorie`) REFERENCES `category` (`id_cat`) ON DELETE CASCADE,
  ADD CONSTRAINT `auteur_category` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_aut`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `comment_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
