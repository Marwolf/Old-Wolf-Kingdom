package org.lupus_regnum.gs.plugins.listeners.executive;

import org.lupus_regnum.gs.model.Npc;
import org.lupus_regnum.gs.model.Player;

public interface PlayerKilledNpcExecutiveListener {
	/**
	 * Return true to prevent the default action on a npcs death (no loot)
	 * @param p Player we do not want to be able to have the default npc death action occur to
	 * @param n NPC we do not want having the default death action occur to
	 */
	public boolean blockPlayerKilledNpc(Player p, Npc n);
}
