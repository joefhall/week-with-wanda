<p>
  Hi {{ $name }}!
</p>

<p>
  It's me... Wanda!
</p>

<p>
  Can you confirm your email address per-leeez?  Just click this link:
</p>

<p>
  <a href="{{ route('verify', ['verificationTokenId' => $verificationTokenId]) }}">{{ route('verify', ['verificationTokenId' => $verificationTokenId]) }}</a>
</p>

<p>
  Muchas gracias!
</p>

<p>
  Wanda
</p>
