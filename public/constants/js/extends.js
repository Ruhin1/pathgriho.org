import { header } from "./header";
import {
  footer,
  whatsapp,
  hate,
  angry,
  love,
  normal,
  satisfy,
  feedback,
} from "./assets";

export const feedbackData = [
  { id: 1, icon: angry, name: "angry", href: "#" },
  { id: 2, icon: hate, name: "hate", href: "#" },
  { id: 3, icon: normal, name: "normal", href: "#" },
  { id: 4, icon: satisfy, name: "satisfy", href: "#" },
  { id: 5, icon: love, name: "love", href: "#" },
];

document.querySelector("[whatsapp]").innerHTML = whatsapp;

/* Rendering */

const footerEl = document.querySelector("footer");
if (footerEl) {
  footerEl.innerHTML = footer;
}

const headerEl = document.querySelector("header");
if (headerEl) {
  headerEl.innerHTML = header;
}

const activeSearch = document.getElementById("active-search");
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const activeForm = activeSearch.querySelector("form");
const searchBtn = activeSearch.querySelector('[type="button"]');
const listsMenu = document.getElementById("top-navigation-list");
const lists = listsMenu.querySelectorAll("li");

// control menubar from mobile or small device
function MenubarControl() {
  mobileMenuBtn.addEventListener("click", function () {
    if (activeForm.classList.contains("hidden")) {
      activeForm.classList.replace("hidden", "flex");
    } else {
      activeForm.classList.replace("flex", "hidden");
    }
    if (listsMenu.classList.contains("hidden")) {
      listsMenu.classList.replace("hidden", "flex");
    } else {
      listsMenu.classList.replace("flex", "hidden");
    }
  });
}

// Navbar menu button control function;
function NavigationControl() {
  lists.forEach(function (list) {
    list.addEventListener("click", function (e) {
      if (!list.classList.contains("active-nav")) {
        lists.forEach((list) => list.classList.remove("active-nav"));
        list.classList.add("active-nav");
      } else if (list.classList.contains("active-nav")) {
        lists.forEach((list) => list.classList.remove("active-nav"));
      }
    });
  });

  document.querySelector("main").addEventListener("click", function () {
    lists.forEach((list) => list.classList.remove("active-nav"));
  });
}

// Search bar control
function SearchBarControl() {
  searchBtn.addEventListener("click", function () {
    activeSearch.classList.toggle("active-search");
  });
}

document.querySelector("[feedback]").innerHTML = feedback(feedbackData);

function FeedbackControl() {
  const feedbackEmojiContainer = document.getElementById("feedback-emogi");
  const feedbackTextContainer = document.getElementById("feedback-text");
  const feedbackEmailContainer = document.getElementById("feedback-email");
  const feedbackAlert = document.getElementById("text-alert");
  const feedbackCloseBtn = document.getElementById("feedback-close-btn");
  const feedbackOpenBtn = document.getElementById("feedback-open-btn");
  const feedbackContainer = document.getElementById("feedback-container");

  // Wait for DOM contents Loaded
  document.addEventListener("DOMContentLoaded", function () {
    let prevEmojiType = undefined;

    feedbackEmojiContainer.querySelectorAll("a").forEach(function (emoji) {
      emoji.addEventListener("click", function () {
        const emojiType = emoji.getAttribute("type");
        if (prevEmojiType) {
          feedbackEmojiContainer.classList.replace(
            `active-${prevEmojiType}`,
            `active-${emojiType}`
          );
        } else {
          feedbackEmojiContainer.classList.add(`active-${emojiType}`);
        }

        prevEmojiType = emojiType;

        feedbackTextContainer.classList.replace("hidden", "block");
      });
    });

    feedbackTextContainer
      .querySelector("button")
      .addEventListener("click", function () {
        if (feedbackTextContainer.querySelector("textarea").value !== "") {
          feedbackAlert.classList.replace("block", "hidden");
          feedbackAlert.textContent = "Thanks for write a feedback!";

          feedbackEmailContainer.classList.replace("hidden", "block");
        } else {
          feedbackAlert.classList.replace("hidden", "block");
          feedbackAlert.textContent =
            "Please write something and send us a feedback!";
        }
      });

    feedbackCloseBtn.addEventListener("click", function () {
      feedbackContainer.classList.replace("flex", "hidden");
    });

    feedbackOpenBtn.addEventListener("click", function () {
      feedbackContainer.classList.replace("hidden", "flex");
    });

    feedbackEmailContainer
      .querySelector("button")
      .addEventListener("click", function () {
        if (feedbackEmailContainer.querySelector("input").value !== "") {
          feedbackAlert.classList.replace("block", "hidden");
          feedbackAlert.textContent = "Thanks for feedback!";

          feedbackContainer.classList.replace("flex", "hidden");
        } else {
          feedbackContainer.classList.replace("hidden", "flex");
          feedbackAlert.classList.replace("hidden", "block");
          feedbackAlert.textContent =
            "Please make sure the email is correct or required!";
        }
      });
  });
}

FeedbackControl();
NavigationControl();
SearchBarControl();
MenubarControl();
