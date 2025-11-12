## CPU Virtualisatie Inschakelen (Intel VT-x / AMD-V)

Doel
----

Dit document legt uit hoe je CPU virtualisatie inschakelt in BIOS/UEFI zodat Docker (en andere hypervisors) correct kunnen draaien. Het behandelt typische namen voor de functie op Intel en AMD systemen, veelvoorkomende BIOS/UEFI menu paden per fabrikant, een snelle verificatiemethode vanuit het besturingssysteem, en een concreet voorbeeld voor een AMD Gigabyte moederbord.

Korte opmerkingen
-----------------
- Virtualisatie is vereist voor veel hypervisors (Docker Desktop, VirtualBox, VMware, WSL2 backends, etc.).
- Het wijzigen van BIOS-instellingen is over het algemeen veilig, maar wijzig geen instellingen die je niet begrijpt. Maak een backup van belangrijke BIOS-instellingen als je fabrikant dit ondersteunt.
- Als je de optie niet ziet, controleer dan op een BIOS/UEFI update van je moederbord fabrikant.

Hoe te controleren vanuit Windows
----------------------------------
Je kunt controleren of virtualisatie is ingeschakeld op verschillende manieren:

**Methode 1: Via Taakbeheer (Task Manager)**
1. Open Taakbeheer (Ctrl + Shift + Esc of rechtsklik op de taakbalk)
2. Ga naar het tabblad "Prestaties" (Performance)
3. Klik op "CPU"
4. Kijk rechtsonderin naar "Virtualisatie" (Virtualization)
   - Als daar "Ingeschakeld" of "Enabled" staat, is virtualisatie actief
   - Als daar "Uitgeschakeld" of "Disabled" staat, moet je het inschakelen in BIOS/UEFI

**Methode 2: Via Systeeminformatie**
1. Druk op Windows-toets + R
2. Typ `msinfo32` en druk op Enter
3. Kijk in het rechter overzicht naar de regels:
   - "Hyper-V - VM Monitor Mode Extensions" moet "Ja" of "Yes" tonen
   - "Hyper-V - Second Level Address Translation Extensions" moet "Ja" of "Yes" tonen

**Methode 3: Via PowerShell**
1. Open PowerShell als Administrator
2. Voer het volgende commando uit:
```powershell
Get-ComputerInfo -Property "HyperV*"
```
3. Als `HyperVRequirementVirtualizationFirmwareEnabled` "True" is, is virtualisatie ingeschakeld

Hoe te controleren vanuit Linux
--------------------------------
Je kunt controleren of je CPU virtualisatie ondersteunt en of het is ingeschakeld met een paar commando's:

```bash
lscpu | grep -i Virtualization
egrep -o 'vmx|svm' /proc/cpuinfo | sort -u
```

- Als `lscpu` `Virtualization: VT-x` of `AMD-V` toont en het `egrep` commando `vmx` (Intel) of `svm` (AMD) print, dan ondersteunt de CPU virtualisatie. Als de CPU het ondersteunt maar je nog steeds problemen hebt met het starten van VM's, kan virtualisatie uitgeschakeld zijn in UEFI/BIOS.

Intel-gebaseerde systemen (VT-x)
--------------------------------
Functienaam

- Intel VT-x (vaak weergegeven als "Intel Virtualization Technology", "VT-x", of vergelijkbaar)

Veelvoorkomende fabrikant/menu voorbeelden

- ASUS: Advanced → CPU Configuration → Intel Virtualization Technology
- MSI: OC → CPU Features → Intel Virtualization Technology
- Gigabyte: M.I.T. → Advanced Frequency Settings → Advanced CPU Core Settings → Intel Virtualization Technology
- ASRock: Advanced → CPU Configuration → Intel Virtualization Technology
- Veel OEM desktops/laptops (Dell / HP / Lenovo): Virtualization Support → Enable Intel Virtualization Technology

AMD-gebaseerde systemen (AMD-V / SVM)
--------------------------------------
Functienaam

- AMD-V (vaak "SVM Mode", "AMD SVM", of "AMD Virtualization" genoemd)

Veelvoorkomende fabrikant/menu voorbeelden

- ASUS: Advanced → CPU Configuration → SVM Mode
- MSI: OC → CPU Features → SVM Mode
- Gigabyte: M.I.T. → Advanced Frequency Settings → Advanced CPU Core Settings → SVM Mode
- ASRock: Advanced → CPU Configuration → SVM Mode
- OEMs (Dell / HP / Lenovo): Security of Virtualization → AMD Virtualization (SVM)

Concreet voorbeeld (jouw hardware)
----------------------------------
Als je een AMD Ryzen 7 3700X hebt op een Gigabyte B550 AORUS ELITE V2, was het pad dat je gebruikte:

1. Herstart de PC en druk herhaaldelijk op Delete bij het opstarten om de BIOS/UEFI te openen.
2. Schakel over naar Advanced Mode (indien gevraagd).
3. Ga naar: Tweaker → Advanced CPU Settings → SVM Mode → zet op Enabled.
4. Save and Exit (meestal F10) en herstart.

Screenshots en referentie voor een vergelijkbaar Gigabyte moederbord zijn hier beschikbaar:

https://arstech.net/how-to-enable-amd-virtualization-on-the-aorus-x570-motherboard/

Veiligheid en probleemoplossing
--------------------------------
- Als je geen virtualisatie-optie ziet:
  - Zoek naar elke optie genaamd SVM, AMD SVM, AMD Virtualization (AMD systemen) of VT-x, Intel Virtualization (Intel systemen).
  - Update je BIOS/UEFI naar de laatste aanbevolen versie van de fabrikant.
  - Op laptops kan virtualisatie soms verborgen zijn door de fabrikant—raadpleeg de support documentatie van de fabrikant.
- Op Windows kunnen Hyper-V of andere platform functies interfereren met bepaalde hypervisors. Docker Desktop gebruikt Hyper-V of WSL2 op Windows — volg Docker's documentatie voor Windows host setup.
- Na het inschakelen in BIOS/UEFI, voer de bovenstaande controles opnieuw uit. Als de hypervisor nog steeds faalt, leg de exacte foutmelding vast en raadpleeg de probleemoplossing gids van de hypervisor.

Notities voor Docker gebruikers
--------------------------------
- Op Linux (native Docker Engine) is CPU virtualisatie in BIOS meestal alleen vereist voor bepaalde driver backends (bijvoorbeeld bij gebruik van geneste virtualisatie of speciale runtimes). Op Windows en macOS is Docker Desktop afhankelijk van virtualisatie lagen (Hyper-V, WSL2, of Apple virtualisatie).

Referenties
-----------
- Gigabyte/AORUS voorbeeld (screenshot walkthrough): https://arstech.net/how-to-enable-amd-virtualization-on-the-aorus-x570-motherboard/

