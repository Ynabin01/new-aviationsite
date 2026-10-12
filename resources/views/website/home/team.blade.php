<section id="ahn-team-section">
  <div class="ahn-team-container">

    <!-- Section Heading -->
    <div class="ahn-team-heading" data-aos="fade-up">
      <span class="ahn-team-eyebrow">
        <span></span>
        THE PEOPLE BEHIND OUR SUCCESS
        <span></span>
      </span>

      <h2>
        Meet Our
        <span>Dedicated Team</span>
      </h2>

      <p>
        The people behind our commitment to quality, guidance,
        and excellence in aviation and international education.
      </p>
    </div>

    <!-- Team Grid -->
    <div class="ahn-team-grid">

      @if(isset($goal) && count($goal) > 0)

        @foreach($goal as $member)
          <article class="ahn-team-card" data-aos="fade-up" data-aos-delay="{{ min($loop->iteration * 70, 350) }}">

            <!-- Member Image -->
            <div class="ahn-team-image">

              <img src="{{ $member->banner_image ?: '/website/img/default-profile.png' }}"
                alt="{{ strip_tags($member->short_content ?? 'Team member') }}" loading="lazy">

              <div class="ahn-team-image-shade"></div>

              <div class="ahn-team-image-label">
                <i class="fas fa-user-tie"></i>
                <span>OUR TEAM</span>
              </div>

              <!-- View Profile Button -->
              <button type="button" class="ahn-team-view" aria-label="View team member profile">
                View Profile
                <i class="fas fa-arrow-right"></i>
              </button>

              <!-- Data for Modal -->
              <div class="ahn-team-hidden-data" hidden>
                <div class="ahn-team-member-name">
                  {!! htmlspecialchars_decode($member->short_content ?? '') !!}
                </div>

                <div class="ahn-team-member-role">
                  {!! htmlspecialchars_decode($member->caption ?? '') !!}
                </div>

                <div class="ahn-team-member-bio">
                  {!! htmlspecialchars_decode($member->long_content ?? '') !!}
                </div>

                <div class="ahn-team-member-facebook">
                  {{ $member->fb_link ?? '' }}
                </div>

                <div class="ahn-team-member-twitter">
                  {{ $member->twit_link ?? '' }}
                </div>

                <div class="ahn-team-member-linkedin">
                  {{ $member->link_link ?? '' }}
                </div>
              </div>

            </div>

            <!-- Member Details -->
            <div class="ahn-team-info">
              <span class="ahn-team-role-line"></span>

              <h3>
                {!! htmlspecialchars_decode($member->short_content ?? '') !!}
              </h3>

              <p>
                {!! htmlspecialchars_decode($member->caption ?? '') !!}
              </p>

              <button type="button" class="ahn-team-profile-link">
                Explore Profile
                <i class="fas fa-long-arrow-alt-right"></i>
              </button>
            </div>

            <!-- Social Links -->
            <div class="ahn-team-socials">

              @if(!empty($member->fb_link))
                <a href="{{ $member->fb_link }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook profile">
                  <i class="fab fa-facebook-f"></i>
                </a>
              @endif

              @if(!empty($member->twit_link))
                <a href="{{ $member->twit_link }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter profile">
                  <i class="fab fa-twitter"></i>
                </a>
              @endif

              @if(!empty($member->link_link))
                <a href="{{ $member->link_link }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              @endif

            </div>

          </article>
        @endforeach

      @else
        <div class="ahn-team-empty">
          Team profiles will appear here.
        </div>
      @endif

    </div>

  </div>
</section>


<!-- ================= TEAM PROFILE SIDE MODAL ================= -->

<div class="ahn-team-modal" id="ahnTeamModal" aria-hidden="true">

  <div class="ahn-team-modal-backdrop" data-team-close></div>

  <div class="ahn-team-modal-panel" role="dialog" aria-modal="true" aria-labelledby="ahnTeamModalName" tabindex="-1">

    <button type="button" class="ahn-team-modal-close" data-team-close aria-label="Close profile">
      <i class="fas fa-times"></i>
    </button>

    <div class="ahn-team-modal-top">
      <span class="ahn-team-modal-eyebrow">MEET OUR TEAM</span>

      <div class="ahn-team-modal-profile">

        <div class="ahn-team-modal-image-wrap">
          <img src="/website/img/default-profile.png" alt="Team member" class="ahn-team-modal-image">
        </div>

        <div class="ahn-team-modal-person">
          <h3 id="ahnTeamModalName"></h3>
          <p class="ahn-team-modal-role"></p>
        </div>

      </div>
    </div>

    <div class="ahn-team-modal-content">
      <h4>About</h4>
      <div class="ahn-team-modal-bio"></div>
    </div>

    <div class="ahn-team-modal-socials"></div>

    <div class="ahn-team-modal-footer">
      <span class="ahn-team-footer-mark">
        <i class="fas fa-plane"></i>
      </span>
      <span>Aviation Hub Nepal</span>
    </div>

  </div>

</div>


<script>
  (function () {
    'use strict';

    function initAhnTeam() {
      var modal = document.getElementById('ahnTeamModal');

      if (!modal || modal.dataset.initialized === 'true') {
        return;
      }

      modal.dataset.initialized = 'true';

      var panel = modal.querySelector('.ahn-team-modal-panel');
      var previousFocus = null;

      function safeExternalUrl(value) {
        var raw = (value || '').trim();

        if (!raw || raw === '#') {
          return '';
        }

        try {
          var parsed = new URL(raw, window.location.origin);

          if (parsed.protocol !== 'http:' && parsed.protocol !== 'https:') {
            return '';
          }

          return parsed.href;
        } catch (error) {
          return '';
        }
      }

      function addSocialLink(container, url, className, label, iconClass) {
        var safeUrl = safeExternalUrl(url);

        if (!safeUrl) {
          return;
        }

        var link = document.createElement('a');
        link.href = safeUrl;
        link.target = '_blank';
        link.rel = 'noopener noreferrer';
        link.className = className;
        link.setAttribute('aria-label', label);

        var icon = document.createElement('i');
        icon.className = iconClass;

        link.appendChild(icon);
        container.appendChild(link);
      }

      function openTeamModal(card) {
        var data = card.querySelector('.ahn-team-hidden-data');

        if (!data) {
          return;
        }

        var name = data.querySelector('.ahn-team-member-name')?.textContent.trim() || 'Team Member';
        var role = data.querySelector('.ahn-team-member-role')?.textContent.trim() || '';
        var bio = data.querySelector('.ahn-team-member-bio')?.innerHTML || '';
        var facebook = data.querySelector('.ahn-team-member-facebook')?.textContent.trim() || '';
        var twitter = data.querySelector('.ahn-team-member-twitter')?.textContent.trim() || '';
        var linkedin = data.querySelector('.ahn-team-member-linkedin')?.textContent.trim() || '';
        var cardImage = card.querySelector('.ahn-team-image > img');

        var modalImage = modal.querySelector('.ahn-team-modal-image');
        modalImage.src = cardImage ? cardImage.src : '/website/img/default-profile.png';
        modalImage.alt = name;

        modal.querySelector('.ahn-team-modal-person h3').textContent = name;
        modal.querySelector('.ahn-team-modal-role').textContent = role;
        modal.querySelector('.ahn-team-modal-bio').innerHTML = bio;

        var socials = modal.querySelector('.ahn-team-modal-socials');
        socials.replaceChildren();

        addSocialLink(socials, facebook, 'fb', 'Facebook profile', 'fab fa-facebook-f');
        addSocialLink(socials, twitter, 'tw', 'Twitter profile', 'fab fa-twitter');
        addSocialLink(socials, linkedin, 'li', 'LinkedIn profile', 'fab fa-linkedin-in');

        previousFocus = document.activeElement;

        modal.classList.add('ahn-team-modal-active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        window.setTimeout(function () {
          var closeButton = modal.querySelector('.ahn-team-modal-close');
          if (closeButton) {
            closeButton.focus();
          }
        }, 80);
      }

      function closeTeamModal() {
        modal.classList.remove('ahn-team-modal-active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';

        if (previousFocus && typeof previousFocus.focus === 'function') {
          previousFocus.focus();
        }
      }

      document.querySelectorAll('#ahn-team-section .ahn-team-card').forEach(function (card) {
        var triggers = card.querySelectorAll('.ahn-team-view, .ahn-team-profile-link');

        triggers.forEach(function (trigger) {
          trigger.addEventListener('click', function (event) {
            event.preventDefault();
            openTeamModal(card);
          });
        });
      });

      modal.querySelectorAll('[data-team-close]').forEach(function (element) {
        element.addEventListener('click', closeTeamModal);
      });

      document.addEventListener('keydown', function (event) {
        if (!modal.classList.contains('ahn-team-modal-active')) {
          return;
        }

        if (event.key === 'Escape') {
          closeTeamModal();
        }

        if (event.key === 'Tab') {
          var focusable = modal.querySelectorAll(
            'button:not([disabled]), a[href], [tabindex="0"]'
          );

          if (!focusable.length) {
            return;
          }

          var first = focusable[0];
          var last = focusable[focusable.length - 1];

          if (event.shiftKey && document.activeElement === first) {
            event.preventDefault();
            last.focus();
          } else if (!event.shiftKey && document.activeElement === last) {
            event.preventDefault();
            first.focus();
          }
        }
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initAhnTeam);
    } else {
      initAhnTeam();
    }
  })();
</script>

<!-- ================= END TEAM SECTION ================= -->