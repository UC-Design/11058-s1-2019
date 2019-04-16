# 11058-back-end
## Module 3: Content Management Systems

_Workshops are not recorded_

Rather than breaking down by week, I'll just group all the content here so you can follow along as needed. 

### Content
*   [CMS introduction](9.1.md)
*   [Wordpress intro](9.2.md)
*   [Wordpress themes](9.3.md)

### Assessment information 

Got to the [Project 2](../assessment/index.md) page to see the project briefs and access the source content. 

### Weekly tasks breakdown
*   Week 9 - CMS Intro. Install your CMS of choice and start playing with it. Change things. Break things. 
*   Week 10 - Group formation, project discussion, advanced CMS.
*   Week 11 - Project work and trouble shooting.
*   Week 12 - Project work and trouble shooting.
*   Week 13 - Project presentations.

### Group work process
You will form the groups yourselves. 

Visit the [Scrum information](https://uc-design.github.io/scrum/) page for more information about Scrum, and how we'll use it to manage the group work process. 

<hr>

## Getting started
The hard part with this project is ensuring that you successfully manage the devlopment workflow within the group. 

Think of it this way, you've got 3 people all working on the same site. So how do you do it?

You need to carefully think about an efficient workflow. Have a read of the articles below, and then a suggested workflow which might help you get started. 


### Creating a workflow
Everyone has a different workflow, you mgiht find it interesting to read a few and then think about how you'll do it:

*   [No more Cowboy coding: Improving your Wordpress workflow](https://premium.wpmudev.org/blog/improve-wordpress-development-workflow-local-server/)
*   [A workflow for wordpress development](http://www.developersworkflow.com)
*   [My WordPress Development Workflow 2018](https://digisavvy.com/2018/05/wordpress-development-workflow-2018/)

If you create your own great workflow then let us all know in the discussion forum!


### Suggested setup and and workflow

Firstly, you should work out who is in your group and then define the tasks needed to complete the project on Trello. 

*Developing the theme*
I would suggest choosing the starter theme as a group i.e. you should all take a look at the options and think about which one will suit you. Make sure you read the [Wordpress themes](9.3.md) page. Once you've decided then follow along.

Once you've set the tasks and chosen a starter theme, you can move onto setting up the correct workflow:

**Product owner**
1. Sign up for hosting with SiteGround (link below). Install Wordpress on the server.
2. Create a public repository for the project on your GitHub account. Then, go to Settings > Collaborators and add the other group members to the project repo. **Make sure it is public!**
3. Download the starter theme and copy the contents directly into your new repository folder (in `wp-content/themes/repo-name`). Make sure the theme files aren't in a whole new sub folder I.e. to get to the `header.php` file it would look like: `wp-content/themes/repo-name/header.php` not `wp-content/themes/repo-name/theme-name/header.php`.
4. Open `style.css` and update the name to match your project name - this is the theme name that will show up in the Wordpess backend.
5. Go to GitHub desktop, commit and push the theme files to GitHub. 

**Each team member**
1. You need to install Wordpress locally (on your computer). We did this in class, but if you need a refresher, see Lynda video: [Install and run Wordpress on MAMP](https://www.lynda.com/WordPress-tutorials/Installing-Running-WordPress-MAMP/661815-2.html?srchtrk=index%3a7%0alinktypeid%3a2%0aq%3awordpress%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2)
2. Clone the new project repository into the Wordpress themes folder. Location will be something like: `MAMP folder/wordpress/wp-content/themes/`
3. From the Wordpress backend, go to `Appearance > Themes` and select your new theme, then click activate. 
4. You'll now be running Wordpress on your computer and using the shared theme files that are stored in GitHub. 

**Theme development**
*   Any team member can start developing the theme. The key thing is to remember to push your changes to GitHub fairly regularly. 
*   **Before** anyone starts writing any new code they need to ensure they always pull the most recent changes to keep their files up to date with those on GitHub.
*   The GitHub repo must always be up to date!

**Content development**
I would suggest adding the content directly to the remote server. If you need, add a few dummy pages to the local Wordpress install just so you can test your theme. 

**Tips***
*   Start work on the theme, push changes to GitHub and ensure your team member pulls the most recent changes before they do anything.
*   While one person works on the theme, another might start uploading the content to the remote site.
*   Don’t work on the same file at the same time - or you will get conflicts. You can manage these through GitHub, but if you just avoid them altogether it will make your life easier!
*   If all is going well, you may want to look at using [WP-Sync](https://github.com/wp-sync-db/wp-sync-db) to ensure your local and remote databases stay in sync.

#### Syncing GitHub to Wordpress
> Over the years, GitHub has become one of the popular choices for developers and pushing your projects to its repo has become an integral part of web development. Doing things this way can help you sync it up with a live WordPress installation. Syncing your GitHub repositories with WordPress manually is somewhat tedious because you have to repeat the process over and over. It also involves copying files to FTP when you hand over the project to your client (on shared servers) or setting push Git hooks to push and then fetch/pull on all sites. This is burdensome and time-consuming. Third-party automation and integration tools have taken my development workflow to the next level. 

Read this article: [How to auto-sync your git repos to wordpress](https://torquemag.io/2017/04/auto-sync-git-repositories-wordpress/).

Try using one of the following (read the article first):
*   [WP Pusher](https://wppusher.com)
*   [GitHub updater](https://github.com/afragen/github-updater)


### Better hosting
SiteGround has come through with the goods, if you sign up using your UC student email address, you can get proper free hosting (with less weird-ness): [SiteGround](https://www.siteground.com/students/). Highly recommend. 

<hr>

### Additional resources

#### Lynda
I've had a few emails asking if there are any relevant resoruces on Lynda, and yes, there are. Here's a few you may find useful:
*   [Install and run Wordpress on MAMP](https://www.lynda.com/WordPress-tutorials/Installing-Running-WordPress-MAMP/661815-2.html?srchtrk=index%3a7%0alinktypeid%3a2%0aq%3awordpress%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2)
*   [Wordpress 5 essential training](https://www.lynda.com/WordPress-tutorials/WordPress-5-Essential-Training/651229-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3awordpress%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2). This is an in-depth course, you might find it useful just to watch a few videos from the many available. 
*   [Drupal 7 Essential Training (from Lynda)](https://www.lynda.com/Drupal-7-tutorials/essential-training/73655-2.html?srchtrk=index%3a1%0alinktypeid%3a2%0aq%3adrupal%0apage%3a1%0as%3arelevance%0asa%3atrue%0aproducttypeid%3a2)

#### Useful tools
*   [Wp-Sync](https://github.com/wp-sync-db/wp-sync-db)
*   [Backup Buddy (WP)](https://ithemes.com/purchase/backupbuddy/)
*   [Local by Flywheel](https://localbyflywheel.com)