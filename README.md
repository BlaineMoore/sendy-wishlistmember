# Sendy + WishListMember Integration
This project provides a direct integration with WishListMember's membership levels by piggybacking off of the arpReach autoresponder integration.

To use this file, you must enter the URL for your Sendy installation on the appropriate line in the top comments of the file, and then upload it to your server. (I put it in my /webhooks folder, if you are using my **sendy-webhooks** project. Even if you aren't, I recommend putting it in a folder you create in your sendy installation to keep things separate.

To integrate WishListMember with Sendy after you have made the above edit and uploaded the file:

1. In WLM, navigate to Integration -> AutoResponder
2. Set your AutoResponder Provider to: arpReach
3. Paste the URL to this file followed by: ?list=XXXXXXXX
  - XXXXXXXXX should be the "short" version of the list ID, found on the "View All Lists" page
  - Example: https://mysendydomain.com/webhooks/WLMarpReach.php?list=115FE20sA4wbiIcewXMJvw
4. Check the "Unsubscribe if Removed from Level" box if desired
5. Update your AutoResponder Settings

![WLM Page for Integration](https://www.evernote.com/l/ALulVEtHtM1LR6D8zXwSaC-grEmNXUA9rJAB/image.png)

One of these days, I will upload my "customized Sendy pages" package, which allows you to add/remove/change functionality on a cosmetic level without having to edit the individual core files, so that you can still update Sendy without trouble. I added a section in the subscribe form popover on the list page that provides the above URL for each of my lists for easy access. In the meantime, you'll have to copy your list ID and URL by hand...
