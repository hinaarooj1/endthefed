<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>End The Fed - Solana Meme Coin</title>
    <!-- <title><?php wp_title(); ?></title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>
<body>
    <!-- Header with Navbar -->
    <?php get_header(); ?>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <img src="gifs/etflogoyh.gif" alt="End The Fed Logo" class="meme-logo">
            </div>
            <div class="dex-logo-circular-container">
                <!-- Dex Screener Logo -->
                <a href="https://dexscreener.com/solana/3bjdxkvycuvua1ih6mecvnmsab6zhnjbh8fo1cl2blue" target="_blank">
                    <div class="dex-logo-circular">
                        <img src="icons/dexscreener-icons-only-white.PNG" alt="Dex Screener Logo" class="dex-logo">
                    </div>
                </a>
            
                <!-- SolScan Logo -->
                <a href="https://solscan.io/token/DFeQJkPhx4MxyAkLPjPR7KYPKoJDW6WUwmhvoqMbTbMT" target="_blank">
                    <div class="solscan-logo-circular">
                        <img src="icons/solscan.png" alt="SolScan Logo">
                    </div>
                </a>
            
                <!-- Raydium Logo -->
                <a href="https://raydium.io/swap/?inputMint=sol&outputMint=DFeQJkPhx4MxyAkLPjPR7KYPKoJDW6WUwmhvoqMbTbMT" target="_blank">
                    <div class="raydium-logo-circular">
                        <img src="icons/raydium-icons.png" alt="Raydium Logo">
                    </div>
                </a>
            </div>
            
        </div>
        <ul class="nav-icons">
            <!-- TikTok -->
            <li><a href="https://www.tiktok.com/@etfonsol" target="_blank"><i class="fab fa-tiktok"></i></a></li>
            <!-- X -->
            <li><a href="https://x.com/EndTheFed_onSol" target="_blank">
                <img src="icons/xlogo.png" alt="X Logo" class="icon-x"></a>
            </li>
            <!-- Telegram -->
            <li><a href="https://t.me/ETF_on_Sol" target="_blank"><i class="fab fa-telegram"></i></a></li>
            <!-- Instagram -->
            <li><a href="https://www.instagram.com/american_liprippers/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <!-- Buy ETF Button -->
            <li class="buy-etf">
                <a href="https://raydium.io/swap/?inputMint=sol&outputMint=DFeQJkPhx4MxyAkLPjPR7KYPKoJDW6WUwmhvoqMbTbMT" target="_blank">
                    BUY $ETF
                </a>
            </li>
        </ul>
        
        </nav>
    </header>

    <!-- Hero Section -->
    <div id="home" class="hero">
        <video autoplay muted loop id="hero-video" class="background-video">
            <source src="Videos/etfweb.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Audio Toggle Button -->
        <button id="audio-toggle" class="audio-button">
            <i class="fas fa-volume-mute"></i>
        </button>
    </div>

    <section class="debt">
        <div class="debt-container">
            <!-- Left GIF -->
            <img src="gifs/etfspin.gif" class="spinning-gif left-gif" alt="Spinning GIF">
            <div class="debt-content">
                <h2>WHAT IS THE NATIONAL DEBT TODAY?</h2>
                <div class="debt-info">
                    <h3 id="debt-amount" class="highlighted-debt">$36,020,821,008,505.20</h3>
                    <p class="highlighted-debt-text">
                        That’s&nbsp;<i class="fas fa-user"></i>&nbsp;<span id="debt-per-person">$0.00</span>&nbsp;for&nbsp;every&nbsp;single&nbsp;person&nbsp;in&nbsp;America.
                    </p>
                    

                </div>
            </div>
            <!-- Right GIF -->
            <img src="gifs/etfspin.gif" class="spinning-gif right-gif" alt="Spinning GIF">
        </div>
    </section>
    

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>What is "End The Fed"?</h2>
            <p>"ETF (EndTheFed) isn’t just a meme coin—it’s a rebellion. 💥 Tired of the Fed looting the economy, printing trillions, and turning your savings into monopoly money? Us too. 🏦💸

                They devalue your money, inflate their power, and leave YOU with the bill. ETF is here to fight back. Built on Solana, it’s a weapon against fiat fraud and central scams. 🚀
                
                Join the revolution, meme your money back, and help us #EndTheFed. It’s time to take control. 🖕💰 #StopTheLooting #MemeRevolution</p>
        </div>
    </section>

<!-- Tokenomics Section -->
<section id="tokenomics" class="tokenomics">
    <div class="container">
        <h2>Tokenomics</h2>
        <div class="tokenomics-content">
            <!-- Left Side: Image -->
            <div class="tokenomics-image-container">
                <img src="gifs/etflogoyh.gif" alt="ETF Logo" class="tokenomics-image">
            </div>
            <!-- Right Side: Details -->
            <div class="tokenomics-details">
                <ul class="tokenomics-list">
                    <li>
                        <i class="fas fa-network-wired"></i>
                        <p>Network Solana</p>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <p>CA: Renounced</p>
                    </li>
                    <li>
                        <i class="fas fa-fire-alt"></i>
                        <p>Liquidty Pool: Burnt</p>
                    </li>
                    <li>
                        <i class="fas fa-percent"></i>
                        <p>Taxes: No Tax ! 0% </p>
                    <li>
                        <i class="fas fa-coins"></i>
                        <p>Supply: 1,000,000,000</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

    

<!-- Merch Section -->
<section id="merch" class="merch">
    <div class="container">
        <h2>ETF Merchandise</h2>
        <p>Stand against the system and wear the movement. Check out the exclusive "End The Fed" merch designed for freedom lovers.</p>
        <div class="merch-content">
            <!-- Slightly Larger Merch Image -->
            <div class="merch-image-container">
                <img src="icons/etfmerch2.png" alt="ETF Merchandise" class="merch-image">
            </div>
            <!-- Features and Details -->
            <div class="merch-details">
                <ul class="features-list">
                    <li>
                        <i class="fas fa-fire"></i>
                        <p>Bold Design:<br>Unique anti-Fed graphics to make a statement.</p>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <p>Premium Quality:<br>Soft fabric, long-lasting print, and comfort fit.</p>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <p>Global Shipping:<br>Delivered straight to your doorstep anywhere.</p>
                    </li>
                    <li>
                        <i class="fas fa-dollar-sign"></i>
                        <p>Support the Movement:<br>Every purchase spreads the message.</p>
                    </li>
                </ul>
                <a href="https://endthefed.printify.me/products" target="_blank">
                    <button class="merch-btn">Buy Now</button>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Embeded Tweet Section-->
    <section id="recent-posts" class="recent-posts">
        <div class="container">
            <h2>Recent Posts</h2>
            <div class="tweets-grid">
                <!-- Embedded Tweet 1 -->
                <div class="tweet-container">
                    <blockquote class="twitter-tweet" data-theme="dark">
                        <p lang="en" dir="ltr">
                            Big Milestone Rewards !!! 🎉<br>We need to reward our community!!! 💸<br><br>6,000 $ Total Prize Pool !!<br>Follow the steps!! ⬇️⬇️⬇️
                            <a href="https://t.co/3iVFDY5Sw1">pic.twitter.com/3iVFDY5Sw1</a>
                        </p>&mdash; End The Fed (@EndTheFed_onSol)
                        <a href="https://twitter.com/EndTheFed_onSol/status/1821267846271267057?ref_src=twsrc%5Etfw">
                            August 7, 2024
                        </a>
                    </blockquote>
                </div>
                <!-- Embedded Tweet 2 -->
                <div class="tweet-container">
                    <blockquote class="twitter-tweet" data-conversation="none" data-theme="dark">
                        <p lang="qme" dir="ltr">
                            <a href="https://twitter.com/search?q=%24ETF&amp;src=ctag&amp;ref_src=twsrc%5Etfw">$ETF</a> 
                            <a href="https://t.co/7h5M7LkdxF">https://t.co/7h5M7LkdxF</a> 
                            <a href="https://twitter.com/EndTheFed_onSol?ref_src=twsrc%5Etfw">@EndTheFed_onSol</a> 🔥 
                            <a href="https://t.co/NLmkB1mGmP">pic.twitter.com/NLmkB1mGmP</a>
                        </p>&mdash; $olanaMemeJUNKIE (@derojunkie) 
                        <a href="https://twitter.com/derojunkie/status/1860015952563437991?ref_src=twsrc%5Etfw">
                            November 22, 2024
                        </a>
                    </blockquote>
                </div>
                <!-- Embedded Tweet 3 -->
                <div class="tweet-container">
                    <blockquote class="twitter-tweet" data-conversation="none" data-theme="dark">
                        <p lang="qme" dir="ltr">
                            <a href="https://twitter.com/hashtag/MuskEndTheFed?src=hash&amp;ref_src=twsrc%5Etfw">#MuskEndTheFed</a> 
                            <a href="https://twitter.com/hashtag/EndTheFed?src=hash&amp;ref_src=twsrc%5Etfw">#EndTheFed</a> 
                            <a href="https://twitter.com/EndTheFed_onSol?ref_src=twsrc%5Etfw">@EndTheFed_onSol</a> 
                            <a href="https://t.co/A9ziCfSU64">pic.twitter.com/A9ziCfSU64</a>
                        </p>&mdash; $olanaMemeJUNKIE (@derojunkie) 
                        <a href="https://twitter.com/derojunkie/status/1859714142892073206?ref_src=twsrc%5Etfw">
                            November 21, 2024
                        </a>
                    </blockquote>
                </div>
            </div>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </section>
    
 
    <!-- How to Buy Section -->
    <section id="how-to-buy" class="how-to-buy">
        <div class="container">
            <h2>How to Buy</h2>
            <div class="buy-steps">
                <!-- Step 1 -->
                <div class="buy-step">
                    <img src="icons/phantom-icon.png" alt="Phantom Icon">
                    <h3>1. Download Phantom</h3>
                    <p>Download Phantom or your wallet of choice from the store. Desktop users, download the Chrome extension by going to phantom.app.</p>
                </div>
                <!-- Arrow Between Steps -->
                <div class="glowing-arrow"></div>
                <!-- Step 2 -->
                <div class="buy-step">
                    <img src="icons/solana-icon.png" alt="Solana Icon">
                    <h3>2. Get Some SOL</h3>
                    <p>Buy SOL directly on Phantom, transfer from another wallet, or purchase on an exchange and send it to your wallet.</p>
                </div>
                <!-- Arrow Between Steps -->
                <div class="glowing-arrow"></div>
                <!-- Step 3 -->
                <div class="buy-step">
                    <img src="icons/raydium-icon.png" alt="Raydium Icon">
                    <h3>3. Go to Raydium</h3>
                    <p>Head to Raydium.io (or Jupiter) to swap your SOL for "End The Fed" tokens.</p>
                </div>
                <!-- Arrow Between Steps -->
                <div class="glowing-arrow"></div>
                <!-- Step 4 -->
                <div class="buy-step">
                    <img src="icons/logo.png" alt="Meme Icon">
                    <h3>4. Buy "End The Fed"</h3>
                    <p>Paste the token address into Raydium and swap SOL for "End The Fed". Join the movement today!</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Contract Address Section -->
<section id="contract-address" class="contract-section">
    <div class="contract-box">
        <p class="contract-label">Contract Address</p>
        <div class="contract-address-container">
            <input
                type="text"
                id="contract-address-input"
                value="DFeQJkPhx4MxyAkLPjPR7KYPKoJDW6WUwmhvoqMbTbMT"
                readonly
            />
            <button id="copy-address-btn" aria-label="Copy Contract Address">
                <i class="fas fa-copy"></i> <!-- Font Awesome Copy Icon -->
            </button>
        </div>
    </div>
</section>

<script>
    // Copy the value of the input to clipboard when the button is clicked
    document.getElementById("copy-address-btn").addEventListener("click", function () {
        const contractAddressInput = document.getElementById("contract-address-input");

        // Use Clipboard API
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(contractAddressInput.value).catch((err) => {
                console.error("Failed to copy: ", err);
            });
        } else {
            // Fallback for older browsers
            contractAddressInput.select();
            contractAddressInput.setSelectionRange(0, 99999); // For mobile compatibility
            try {
                document.execCommand("copy");
            } catch (err) {
                console.error("Fallback copy failed: ", err);
            }
            // Deselect the text after copying
            window.getSelection().removeAllRanges();
        }
    });
</script>


<?php get_footer(); ?>
    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 End The Fed. All rights reserved. Powered by Solana.</p>
            <p>Website designed by https://t.me/cryptomaestro</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Rolling Numbers and Continuous Rising Debt
        let currentDebt = 36020821008505.20; // Starting debt value
        const debtIncreaseRate = 153872.13; // Debt increase per second
        const population = 331000000; // Population for per-person debt

        // Format numbers with commas and two decimal places
        function formatNumber(num) {
            return "$" + num.toLocaleString("en-US", { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        // Update the debt amount dynamically
        function updateDebt() {
            // Increase all parts of the debt dynamically
            currentDebt += (debtIncreaseRate / 10); // Increment every 1/10th of a second
            document.getElementById("debt-amount").innerText = formatNumber(currentDebt);
            document.getElementById("debt-per-person").innerText = formatNumber(currentDebt / population);
        }

        // Smooth GSAP animation to the starting value
        gsap.to("#debt-amount", {
            innerText: currentDebt,
            snap: { innerText: 1 },
            duration: 4,
            ease: "power1.inOut",
            onUpdate: function () {
                const element = document.querySelector("#debt-amount");
                element.innerText = formatNumber(Number(element.innerText.replace(/[$,]/g, "")));
            },
            onComplete: function () {
                // Start continuous updates after the animation completes
                setInterval(updateDebt, 100); // Update every 100ms
            }
        });

        // Initial GSAP animation for per-person debt
        gsap.to("#debt-per-person", {
            innerText: (currentDebt / population).toFixed(2),
            snap: { innerText: 1 },
            duration: 4,
            ease: "power1.inOut",
            onUpdate: function () {
                const element = document.querySelector("#debt-per-person");
                element.innerText = formatNumber(Number(element.innerText.replace(/[$,]/g, "")));
            }
        });

        // Audio Toggle for Video
        const video = document.getElementById('hero-video');
        const audioToggle = document.getElementById('audio-toggle');
        const audioIcon = audioToggle.querySelector('i');

        audioToggle.addEventListener('click', () => {
            if (video.muted) {
                video.muted = false;
                audioIcon.classList.remove('fa-volume-mute');
                audioIcon.classList.add('fa-volume-up');
            } else {
                video.muted = true;
                audioIcon.classList.remove('fa-volume-up');
                audioIcon.classList.add('fa-volume-mute');
            }
        });
    </script>
</body>
</html>