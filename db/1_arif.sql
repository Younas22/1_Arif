-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 01:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1_arif`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_cat_id` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'admin',
  `site_name` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `home_heading` text DEFAULT NULL,
  `home_sub_heading` text DEFAULT NULL,
  `title_a` text NOT NULL,
  `img_a` varchar(255) DEFAULT NULL,
  `desc_a` text NOT NULL,
  `title_b` text NOT NULL,
  `img_b` varchar(255) DEFAULT NULL,
  `desc_b` text NOT NULL,
  `main` enum('a','b') NOT NULL DEFAULT 'a',
  `title_c` text NOT NULL,
  `desc_c` text NOT NULL,
  `title_d` text NOT NULL,
  `desc_d` text NOT NULL,
  `title_e` text NOT NULL,
  `desc_e` text NOT NULL,
  `title_f` text NOT NULL,
  `desc_f` text NOT NULL,
  `title_g` text NOT NULL,
  `desc_g` text NOT NULL,
  `title_h` text NOT NULL,
  `desc_h` text NOT NULL,
  `title_i` text NOT NULL,
  `desc_i` text NOT NULL,
  `title_j` text NOT NULL,
  `desc_j` text NOT NULL,
  `title_k` text NOT NULL,
  `desc_k` text NOT NULL,
  `title_l` text NOT NULL,
  `desc_l` text NOT NULL,
  `title_m` text NOT NULL,
  `desc_m` text NOT NULL,
  `title_n` text NOT NULL,
  `desc_n` text NOT NULL,
  `title_o` text NOT NULL,
  `desc_o` text NOT NULL,
  `title_p` text NOT NULL,
  `desc_p` text NOT NULL,
  `title_q` text NOT NULL,
  `desc_q` text NOT NULL,
  `title_r` text NOT NULL,
  `desc_r` text NOT NULL,
  `title_s` text NOT NULL,
  `desc_s` text NOT NULL,
  `title_t` text NOT NULL,
  `desc_t` text NOT NULL,
  `video_a_title` text DEFAULT NULL,
  `video_a` text NOT NULL,
  `video_b_title` text DEFAULT NULL,
  `video_b` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_cat_id`, `author`, `site_name`, `publisher`, `logo`, `favicon`, `home_heading`, `home_sub_heading`, `title_a`, `img_a`, `desc_a`, `title_b`, `img_b`, `desc_b`, `main`, `title_c`, `desc_c`, `title_d`, `desc_d`, `title_e`, `desc_e`, `title_f`, `desc_f`, `title_g`, `desc_g`, `title_h`, `desc_h`, `title_i`, `desc_i`, `title_j`, `desc_j`, `title_k`, `desc_k`, `title_l`, `desc_l`, `title_m`, `desc_m`, `title_n`, `desc_n`, `title_o`, `desc_o`, `title_p`, `desc_p`, `title_q`, `desc_q`, `title_r`, `desc_r`, `title_s`, `desc_s`, `title_t`, `desc_t`, `video_a_title`, `video_a`, `video_b_title`, `video_b`, `status`, `created_at`) VALUES
(15, 0, 'admin', 'footballsea', 'footballsea', '57cf77ed05cfce4bdc53c0c9c3798e50.png', '1b913ff0e9408152161210c4d7c11444.jpg', 'The footballsea is the best information blog for everyone', 'Follow us!', 'amazing blog for everyone', 'dca3ef48fbc74ed2bf677557903878c3.jpg', 'The footballsea is the best information blog for everyone', 'How much does a blog post cost USA?', 'd40898302cacb7cd34d56fa49ecedb0b.jpg', 'The most common blog post cost discussed by most freelancers is around $100 for a basic post, although more technical posts can cost significantly more. When charging per word, writers will often quote from $. 10 and up to $2 per word.', 'a', 'How much should I charge for a 500 word blog post?', 'All things considered, 500 words is a fairly short article length, appropriate for a short newsletter article or personal profile. A typical rate for this would be $75-$200, but it could range much lower or higher depending on the factors mentioned above.', 'Is blogging profitable in 2022?', 'You are in the right place. The blog you\'re currently reading now makes $10,000+ every single month in passive income. In the last year i.e 2021, this blog generated over $160,000. In 2020, it generated $140,000 (proof here).', 'How do bloggers get paid?', 'Who pays the blogger? In most cases, the ad network a blogger is associated with pays the blogger a monthly income. Occasionally, brands will reach out directly to a blogger to place an ad on the blog. In that case, the brand would negotiate a rate and pay the blogger directly.', 'Do I need a business license for my blog?', 'Most bloggers do not need to obtain a federal license to do business, but most states do require bloggers to have a general business license. Sales Tax Permit: If you are selling goods or services on your blog, you may need to get a sales tax license or permit.', 'Should I name my blog after myself?', 'In a way, using your own name is more about creating a strong connection with you as a person and blogger than it is about delivering a particular type of advice or information. This doesn\'t mean that you can\'t deliver value or targeted blog posts — it simply means that you\'re not as tied down.', 'Do you need to copyright your blog?', 'Should Bloggers Register for Copyright? Although bloggers aren\'t required to file an official copyright registration, you may wish to do so. That\'s because you can\'t sue for copyright infringement unless you\'ve officially registered your work. Short version: no registration, no lawsuits.', 'Can my blog be about everything?', 'We\'ve established that if you\'re blogging for fun and not for money, you can write about anything. This is because you do not need to be concerned about traffic when working on a personal blog.', 'Do bloggers pay taxes?', 'Be aware that as a blogger, you\'re likely to face estimated taxes, something most traditional employees don\'t have to worry about. The United States tax system operates on a \"pay-as-you-go\" basis. Since you don\'t have any taxes deducted from your blogging income, you must pay estimated taxes to the IRS every quarter.', 'How much do average bloggers earn?', 'In India, a professional blogger can earn up to $10,000 every month. On average, a blogger can earn between $300 and $400 per month. Celebrity bloggers can earn in the range of $20,000 to $30,000 every month. Blogging has emerged as a serious profession for many people in India over the last few years.', 'Can you make money from an anonymous blog?', 'It\'s pretty clear that you can make money from an anonymous blog. In fact, some of the most popular anonymous blogs have found themselves making six figures a year – not bad for those who blog under an alias!', 'What is URL for blog?', 'A URL is simply a website\'s “address”, the one the appears in the white bar at the top of your browser. As for pronunciation, some people say each initial separately (“you are ell“), and others pronounce it like a word (“earl“). Either is correct.', 'What is a lifestyle blog?', '“A lifestyle blogger creates content inspired and curated from their personal interests and daily activities. As such, lifestyle blogs are oftentimes highly personalized to the author\'s location, life stage and experience.”', 'How can you add media files in your blog?', 'Answer: First, open a post or a page to which you would like to add your media. Click your cursor on the area of the post or page where you would like the media to show. Next, click the Add Media button in the top left corner of your toolbar: And click Add New to upload new media to your website', 'How do bloggers get paid?', 'Who pays the blogger? In most cases, the ad network a blogger is associated with pays the blogger a monthly income. Occasionally, brands will reach out directly to a blogger to place an ad on the blog. In that case, the brand would negotiate a rate and pay the blogger directly.', 'Can a blog cover multiple topics?', 'What is a Multi-Niche Blog? A multi-niche blog simply covers multiple topics. The benefit of this is that you can write about all of your interests on the same blog. For example, you could write about photography one day then share your favorite recipe the next.', 'What types of blogs are in demand?', 'Fashion Blogs. Fashion blogs are one of the most popular types of blogs on the internet. ...\r\nFood Blogs. Food blogs are another popular blog type. ...\r\nTravel Blogs. ...\r\nMusic Blogs. ...\r\nLifestyle Blogs. ...\r\nFitness Blogs. ...\r\nDIY Blogs. ...\r\nSports Blogs.', 'Should I name my blog after myself?', 'In a way, using your own name is more about creating a strong connection with you as a person and blogger than it is about delivering a particular type of advice or information. This doesn\'t mean that you can\'t deliver value or targeted blog posts — it simply means that you\'re not as tied down.', 'How many views do you need to make money blogging?', 'If you have more than 100,000 pageviews a month on your blog (total pageviews, not unique) you should be blogging full-time (i.e. earning more than $3,500/month from your blog). That doesn\'t mean that the second you hit that 100,000/month pageview mark that someone will send you a check.', NULL, 'https://www.youtube.com/embed/yX5vGan6ulw', NULL, 'https://www.youtube.com/embed/Xmm1bjITSgM', '0', '2022-05-14 10:26:19'),
(17, 8, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'Did Syracuse ever won a national championship in football?', 'd3a7f4990c4079dca3e2115455fe72f8.jpg', 'On January 1, 1960, Syracuse University\'s football team reached the height of its undefeated season. Competing against the University of Texas in the Cotton Bowl, Syracuse triumphed and earned its first football national championship.', 'How many Heisman does Syracuse have?', '1211a073fd9ebd1447c15466b80f389b.jpg', 'Only one Syracuse University football player has ever won the Heisman: Ernie Davis in 1961. Davis was also the first Black player to receive the honor. Tucker received Heisman buzz last season when he broke Syracuse football\'s single-season rushing record with 1,496 yards.', 'a', 'What is Syracuse University known for?', 'Syracuse is a university of national stature and international opportunity, known for its investment in research and innovation, its professional programs and its undeniable school spirit.', 'Who is LSU biggest rival?', 'Even though Alabama\'s main rival is unquestionably Auburn, LSU fans consistently chose the Crimson Tide as the program\'s top rival close to 70 percent of the time.', 'What GPA do you need to get into Syracuse?', 'Syracuse University admission requirements for GPA\r\n\r\nApplicants require a good GPA in high school to increase their Syracuse acceptance rate. Although there is no minimum requirement of GPA to apply for admission, students need to meet the average GPA requirement of 3.67.', 'Is Syracuse a hard school?', 'How Hard Is It to Get Into Syracuse? Syracuse is a challenging school to gain admission to. It received a record-setting 39,342 applications to its Class of 2025—a 24% increase over the prior year. Syracuse doesn\'t publish its acceptance numbers, but its overall acceptance rate generally hovers around 70%.', 'Is Syracuse a liberal school?', 'The Political Climate in Syracuse, NY is Moderately liberal.', 'Is Syracuse an Ivy League school?', 'What is an ivy league school? These prestigious institutions on this team are Brown University, Harvard University, Cornell University, Princeton University, Dartmouth University, Yale University, Columbia University and the University of Pennsylvania.', 'Why does Syracuse have such a high acceptance rate?', 'The rise in the acceptance rate can be attributed to the amount of students that transferred out of the university over the past year, in part due to the school\'s COVID-19 restrictions and the strain of having online classes last year.', 'Does Syracuse have a good reputation?', 'Syracuse University Ranking Factors\r\n\r\nSyracuse University is ranked #62 out of 443 National Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. Read more about how we rank schools.', 'Is Syracuse a pretty campus?', 'Condé Nast Traveler included Colgate University and Syracuse University in the list alongside 48 other stunning, scenic campuses. Both Central New York campuses received high marks for their beautiful showings of the seasons.', 'Is Syracuse a prestigious University?', 'Syracuse University is ranked #62 out of 443 National Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence.', 'What is the crime rate in Syracuse New York?', 'The Syracuse NY crime rate for 2018 was 702.86 per 100,000 population, a 0.34% decline from 2017. The Syracuse NY crime rate for 2017 was 705.25 per 100,000 population, a 4.51% decline from 2016.', 'What is the easiest Ivy League school to get into?', 'Cornell\r\nCornell Admission Statistics\r\n\r\nCornell is considered the \"easiest\" Ivy League to get into because it has the highest Ivy League acceptance rate.', 'Is Syracuse University a safe school?', 'Syracuse University reported 560 incidents related to crime and safety in 2019. These student-involved incidents took place on campus. Based on a student body population of 22,850, that\'s 24.51 incidents per 1,000 students.', 'Is Syracuse a good place to live?', 'U.S. News & World Report ranks Syracuse as one of the best places to live in the nation, thanks to quality of life, affordability, and lower crime rates than similarly sized metro areas.', 'What tier is Syracuse University?', 'top-tier\r\nSyracuse University is a top-tier, R-1 research institution, the highest designation made by the Carnegie Classifications of Institutions of Higher Education. The designations are based on research and development expenditures, research staff, and number of doctoral conferrals.', 'What college has the nicest students?', 'Nicest Colleges in America\r\nUniversity of Michigan. Ann Arbor, MI. ...\r\nUniversity of North Carolina at Chapel Hill. Chapel Hill, NC. ...\r\nUniversity of California. Los Angeles, CA. ...\r\nUniversity of Virginia. Charlottesville, VA. ...\r\nUniversity of Florida. ...\r\nUniversity of Maryland, College Park. ...\r\nUniversity of Wisconsin. ...\r\nUniversity of Texas at Austin.', '', '', '', '', 'SYRACUSE TAKES THE LEAD IN THE FINAL SECONDS', 'https://www.youtube.com/embed/2BTshLyhZ9E', 'Syracuse Football is GOOD...But They Won\'t Win', 'https://www.youtube.com/embed/ZOX4_wmrEYg', '1', '2022-09-18 03:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(250) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_title`, `status`) VALUES
(7, 'mobile', '1'),
(8, 'footbal', '1'),
(9, 'it', '1'),
(10, 'cricket', '1'),
(11, 'computer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`) VALUES
(7, 'hm.younas22@gmail.com'),
(8, 'abc@gmail.com'),
(9, 'xyz@gmail.com'),
(10, 'blog@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `decript_password` varchar(255) DEFAULT NULL,
  `user_type` enum('admin','user') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_email`, `user_phone`, `password`, `decript_password`, `user_type`, `created_at`) VALUES
(1, 'demo', 'user', 'arif@admin.com', '1111', '4c50b1f1b63406a81198d06d5292245b184418d5', 'arif2022', 'admin', '2022-01-09 07:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
